@extends('wizard.layout')

@section('titleHeader')
    <h1>{{ trans('edit.welcomeTo') }} , {{$user->name}}!</h1>
    <p>{{ trans('edit.writeAboutYouHelpHost') }}</p>
@endsection


@section('forms')

    <div class="box">
        <div class="form">
            {!! Form::model($user, ['class' => '', 'route' => 'profile.edit']) !!}
            
            <div class="form-group">
                {!! Form::label('title', 'Profesión', ['class' => 'col-sm-12 control-label']) !!}
                <div class="col-sm-12">
                    {!! Form::text('title','', ['class' => 'form-control', 'id' => 'title']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('linkedin', 'Linkedin', ['class' => 'col-sm-12 control-label']) !!}
                <div class="col-sm-12">
                    {!! Form::text('linkedin','', ['class' => 'form-control', 'id' => 'linkedin']) !!}
                </div>
            </div>

            {!! Form::label('profilePhoto', 'Foto de perfil', ['class' => 'col-sm-12 control-label']) !!}
            <div class="col-sm-12">
            @include('images._menuPhotos')
            </div>
            <div id="home" class="col-sm-12">
                <div id="images" >

                </div>
            </div>
            

            <div class="form-group">
                {!! Form::label('about', trans('edit.aboutYou'), ['class' => 'col-sm-12 control-label']) !!}
                <div class="col-sm-12">
                    {!! Form::textarea('about',null, ['class' => 'form-control', 'rows' => 5]) !!}
                </div>
            </div>


    <input type="submit" value="{{ trans('common.continue') }}" class="btn btn-primary btn-lg col-md-3 col-sm-4 pull-right ">
    {!! Form::close() !!}
            

        </div>
        <div class="clearfix"></div>



    </div>
     

@endsection

@section('javascript')
    <script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/upload.js') }}"></script>
    @include('images._js')
@endsection

