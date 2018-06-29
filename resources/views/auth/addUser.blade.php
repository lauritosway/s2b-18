@extends('start2bee')

@section('content')
<section class="bg-dark">
<div class="container ">
    @include('error.list')

    <div class="row">
        <div class="col-sm-7 col-sm-push-3 col-md-5 col-lg-6 col-lg-push-3 col-md-push-4 text-center">
            <h1>{{ trans('common.joinNow') }}</h1>
            <h4>
                {{ trans('common.uneteANuestraComunidad') }}
            </h4>
        </div>
        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-7 col-lg-6 col-md-5 col-sm-push-3 col-md-push-4 col-lg-push-3   panel">
                    <div class="form">

                    {!! Form::open(['id' => 'registerForm', 'url' => URL::to('addUser'),'files'=> true]) !!}


          <div class="form-group">
              {!! Form::label('name', trans('edit.name'), ['class' => 'col-sm-12 control-label']) !!}
              <div class="col-sm-12">
                  {!! Form::text('name',null, ['class' => 'form-control']) !!}
              </div>
          </div>

          <div class="form-group">
              {!! Form::label('email', 'Email', ['class' => 'col-sm-12 control-label']) !!}
              <div class="col-sm-12">
                  {!! Form::email('email',null, ['class' => 'form-control']) !!}
              </div>
          </div>
          <div class="form-group">

              {!! Form::label('linkedin', trans('edit.linkedin'), ['class' => 'col-sm-12 control-label']) !!}

              <div class="col-sm-12">

                  {!! Form::text('linkedin',null, ['class' => 'form-control']) !!}

              </div>

          </div>



          <div class="form-group">

              {!! Form::label('title','Title', ['class' => 'col-sm-12 control-label']) !!}

              <div class="col-sm-12">

                  {!! Form::text('title',null, ['class' => 'form-control']) !!}

              </div>

          </div>
          <div class="form-group">

              {!! Form::label('photo','Photo', ['class' => 'col-sm-12 control-label']) !!}

              <div class="col-sm-12">

                  {!! Form::file('photo',null, ['class' => 'form-control']) !!}

              </div>

          </div>
          

              <div class="form-group">
                  {!! Form::label('about', trans('edit.aboutYou'), ['class' => 'col-sm-12 control-label']) !!}
                  <div class="col-sm-12">
                      {!! Form::textarea('about',null, ['class' => 'form-control', 'rows' => 5]) !!}
                  </div>
              </div>

            

                                               <div class="form-group">
                                                    <div class="col-sm-12">
                                                       {!! Form::submit(trans('common.joinNow'), ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                                                    </div>
                                                </div>


                                           {!! Form::close() !!}
                                           <div class="col-sm-12">
                                               <p class="terms">{{ trans('common.bySigningIAgree') }} <a target="_blank" href="{{route('privacyTerms')}}">{{ trans('common.termsAndPrivacy') }}.</a></p>
                                           </div>
                                           
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       </section>
@endsection                       
