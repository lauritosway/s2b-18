@extends('start2bee')

@section('content')

<div class="container">
<div class="row">
	<div id="article" class="col-sm-8">
	<h1>{{$post['title']}}</h1>
	<hr>
	{!!$post['body']!!}
	</div>
	<div class="col-sm-4">
	</div>
</div>
</div>


@stop