@extends('start2bee')

@section('css')
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
@stop

@section('content')
<div id="show" class="container" style="margin-top: 20px;">

    <div class="row">
        <div id="aside" class="col-sm-2">

        </div> <!-- aside -->
        <div id="main" class="col-sm-8">



        <center>
           <img src="{{\App\Libraries\Images::getUrl('150',$image)}}" name="aboutme" width="150" height="150" border="0" class="img-circle"></a>
           <h3 class="media-heading">{{$profile['name']}}</h3>
           <h3 class="media-heading"><small><i class="fa fa-linkedin"></i> <a href="//{{$profile['linkedin']}}" target="_blank">{{$profile['linkedin']}}</a></small></h3>

           @if(count($languages) > 0)
                <span><strong>{{ trans('common.languages') }}: </strong></span>
                   @foreach($languages AS $key => $lang)
                    <span class="label label-success">{{$lang['title']}}</span>
                   @endforeach
           @endif
           <br>
           {!!nl2br(strip_tags($profile['about']))!!}

           <hr>
           <br>
               

           </center>
           



        </div>

    </div>
</div>




        </div>





    </div> <!-- row -->

</div>

@stop






@section('javascript')

    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?libraries=places&language=en"></script>
    <script src="{{ asset('js/places.js') }}"></script>
    <script src="{{ asset('js/autosize.js') }}"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script>
        $(function()
        {
            $("#place").keydown(function(event){
                if(event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });

        });
    </script>
@stop
