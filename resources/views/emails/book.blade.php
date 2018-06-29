@extends('emails.template')

@section('content')
	Nombre: {{$name}} <br>
	Email: {{$email}} <br>
	Teléfono: {{$phone}} <br>
	Entrada: {{$check_in}} <br>
	Salida: {{$check_out}}<br>
	Número de personas: {{$people}}<br>
	Sala: {{$venueName}} <br>
	Estilo de sala: {{$venueType}} <br>
	Mensaje: <br><br>
	{{$text}}
@endsection