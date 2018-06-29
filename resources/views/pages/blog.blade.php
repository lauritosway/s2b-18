@extends('start2bee')

@section('content')

@include('partials.blog', ['posts' => $posts])

@stop