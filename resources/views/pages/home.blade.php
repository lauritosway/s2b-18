@extends('start2bee')

@section('content')

@include('partials.slides')

@include('partials.blog',['posts' => $posts])

@include('partials.space')
@include('partials.services')


@stop