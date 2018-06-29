@extends('start2bee')

@section('content')

<div class="container">
	<div class="row">
	<div class="col-sm-10 col-sm-push-1">
			<h1>Reserva enviada con éxito</h1>

			<div class="col-sm-2"><i class="fa fa-check-circle"></i></div>
			<div class="col-sm-10">
			
			Tu petición ha sido enviada, nos pondremos en contacto contigo por teléfono o email para confirmar los detalles
			contigo. Si tienes cualquier duda, o necesita cualquier aclaración no dudes en llamarnos al {{trans('common.phone')}} o
			escríbenos a {{trans('common.email')}}
			</div>
	</div>
	</div>
</div>
@stop

