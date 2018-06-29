@extends('start2bee')


@section('content')

<div class="container">

    <div class="col-sm-12 text-center">
        @section('titleHeader')
            <h1>{{ trans('common.addYourHome') }}</h1>
        @show
    </div>

    <div class="row">
        <div id="edit" >
            <div id="main" class="col-sm-10 col-sm-push-1 col-md-8 col-md-push-2">
                @include('error.list')
                @yield('forms')
            </div>
        </div>
    </div>

</div>
@endsection