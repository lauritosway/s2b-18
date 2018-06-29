<div id="bigbox" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url({{ asset("assets/images/slides/{$name}.jpg") }});">
	<div id="messageSent" class="alert alert-success alert-dismissible hide" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Tu mensaje ha sido enviado!</strong> Nos pondremos en contacto contigo lo antes posible.
	</div>
	<div class="container">
		<div class="row">
			<div id="message" class="col-sm-8">
				<h1>
				{{$title}}
				<span>{{$description}}</span>
				</h1>
				<div class="col-sm-4 col-sm-push-4">
					<a href="#" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#modalContact">Contactar</a>
				</div>
				<br>
				<div id="contact" class="col-sm-12">
					<p>Llámanos ahora</p>
					<p>
						<a href="tel:0034932857077">932 857 077</a> <a href="tel:0034657367764">| <i class="fa fa-whatsapp"></i> 657 367 764</a>
					</p>
					<p>9:00 a 14:00 y 15:30 a 20:00</p>

				</div>
		</div>
	</div>
</div>
</div>
@include('partials.modal')
