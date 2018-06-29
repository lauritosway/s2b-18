@extends('emails.template')

@section('content')
	Nombre: {{$name}} <br>
	Email: {{$email}} <br>
	Teléfono: {{$phone}} <br>
	Mensaje: <br><br>
	{{$text}}
@endsection