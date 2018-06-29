@extends('start2bee')


@section('javascript')
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/upload.js') }}"></script>
    <script type="text/javascript">

    $(function () {
        $('#fileupload').fileupload({
            dataType: 'json',
            formData: {_token: '{{csrf_token()}}'},
            start: function (e, data)
            {
                $("#photoUpload").addClass('hidden');

                var photoPending = '<div class="photoPending"><div class="loadingPhoto"><i class="fa fa-circle-o-notch fa-spin"></i></div><div class="uploading">Uploading...</div></div>';

                if( $("#images .photo:eq(0)").length )
                    $( "#images .photo:eq(0)" ).after(photoPending);
                else
                    $("#images").prepend(photoPending);


            },
            done: function (e, data)
            {

                var photo = '<img src="'+data.result.url+'"></div>';

                $("#images").html(photo);

                $("#images .photoPending").last().remove();



            },
            progressall: function (e, data) {
                /*
                if(parseInt(data.loaded / data.total * 100, 10) == 100)
                {
                }
                */
            }
        });

    });

    function selectVenue(value)
    {

    if( $("#"+value).hasClass('venueSelected') ) 
    {
      $("#"+value).removeClass("venueSelected");
      $("#"+value+"_cb").prop('checked', false);

    }
    else {
      $("#"+value).addClass("venueSelected");

    $("#"+value+"_cb").prop('checked', true);
    }

    }

    </script>
@stop


@section('content')

<div id="edit" class="container">

    <div class="row">
        <div style="height: 20px;"></div>
        <div id="menu" class="col-sm-3 col-md-2">
            <div class="box">
                <div id="home" class="col-sm-12">
                    <div id="images" >
                        <img src="{{\App\Libraries\Images::getUrl('150',$user->image)}}">
                    </div>
                </div>
            </div>
                @include('images._menuPhotos')

            <a class="btn btn-block btn-default" href="{{route('profile', [$user->id])}}">{{ trans('common.viewProfile') }}</a>

        </div>        
        <div id="main" class="col-sm-8">
            @include('error.list')

            <div class="box">
                <h3>{{ trans('common.profile') }}</h3>
                <div class="form">
                    {!! Form::model($user, ['class' => '', 'route' => 'profile.edit']) !!}

                    <div class="form-group">

                        {!! Form::label('name', trans('edit.name'), ['class' => 'col-sm-12 control-label']) !!}

                        <div class="col-sm-12">

                            {!! Form::text('name',null, ['class' => 'form-control']) !!}

                        </div>

                    </div>

                    <div class="form-group">

                        {!! Form::label('linkedin', trans('edit.linkedin'), ['class' => 'col-sm-12 control-label']) !!}

                        <div class="col-sm-12">

                            {!! Form::text('linkedin',null, ['class' => 'form-control']) !!}

                        </div>

                    </div>



                    <div class="form-group">

                        {!! Form::label('title', trans('edit.title'), ['class' => 'col-sm-12 control-label']) !!}

                        <div class="col-sm-12">

                            {!! Form::text('title',null, ['class' => 'form-control']) !!}

                        </div>

                    </div>

                    

                        <div class="form-group">
                            {!! Form::label('about', trans('edit.aboutYou'), ['class' => 'col-sm-12 control-label']) !!}
                            <div class="col-sm-12">
                                {!! Form::textarea('about',null, ['class' => 'form-control', 'rows' => 5]) !!}
                            </div>
                        </div>

                </div>
                <div class="clearfix"></div>
                <h3>{{ trans('common.yourClasses') }}</h3>

                <div class="form">
                @include('profile/_languages')
                </div>
                

            </div>
            <div class="col-sm-4 pull-right">
                <input type="submit" value="{{trans('edit.save')}}" class="btn btn-default btn-primary btn-block">
            </div>
            {!! Form::close() !!}

        </div>


    </div>
</div>
@stop


