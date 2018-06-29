@extends('start2bee')

@section('content')
<section class="bg-dark">
    <div id="edit" class="container" >
        @include('error.list')
        <div class="row">
            <div class="col-sm-7 col-sm-push-3 col-md-5 col-lg-6 col-lg-push-3 col-md-push-4 text-center">
                <h1>Login</h1>
            </div>


            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-md-5 col-sm-push-3 col-md-push-4  panel">

                    <div class="form">

                        {!! Form::open([ 'class' => '', 'url' => URL::to('login') ]) !!}
                         <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'col-sm-12 control-label']) !!}
                            <div class="col-sm-12">
                                {!! Form::email('email', null, ['class' => 'form-control']) !!}
                            </div>
                         </div>

                         <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'col-sm-12 control-label']) !!}
                            <div class="col-sm-12">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                         </div>
                         

                        <div class="clearfix"></div> <br>
                         <div class="form-group">
                             <div class="col-sm-8">
                                {!! Form::submit('Login', ['class' => 'btn btn-primary btn-lg col-sm-8']) !!}
                             </div>
                         </div>

                         <div class="form-group ">
                              <div class="col-sm-12 otherLinks">
                                <div class="row">
                                    <div class="col-sm-12 ">
                                        <a href="{{route('register')}}"> {{ trans('edit.dontHaveAccount') }}</a>
                                    </div>
                                </div>
                              </div>
                         </div>

                    </div>
                </div>

                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
