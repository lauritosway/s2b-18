@extends('wizard.layout')

@section('titleHeader')
    <h1>Apúntate a nuestro workshops de idiomas!</h1>
    <p>Son gratuitos, hacemos conversación cada semana, ven a mejorar tus idiomas con nosotros!</p>
@endsection


@section('forms')

    <div class="box">
        <div class="form">
            {!! Form::model($user, ['class' => '', 'route' => 'profile.edit']) !!}

            @include('profile/_languages')

        </div>

    </div>

    <input type="submit" value="{{ trans('common.continue') }}" class="btn btn-primary btn-lg col-md-3 col-sm-4 pull-right ">


    {!! Form::close() !!}

     

@endsection


