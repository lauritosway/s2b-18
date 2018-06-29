@extends('start2bee')

@section('content')

@include('partials.slide',['name' => 'buzz', 
						   'title' => 'Alquilamos salas',
						   'description' => 'Reuniones, eventos, cursos y presentaciones en Barcelona'
						   ])

<section class="bg-dark">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center  ">Nuestros Espacios, Tu network</h2>
			<p class="text-center  ">
				Tenemos un espacio cómodo, limpio, luminoso de diseño moderno y práctico.
				Concéntrate en lo importante, tu trabajo. <br> Ponemos a tu disposición salas de reuniones privadas
				y zonas comunes donde tomarte un café. Te encantará.
			</p>
		</div>

		<div class="section-header">
			<h3 class="text-center">Start2bee Escorial</h3>
		</div>
		@include('partials.venues', ['spaces' => config('spaces.escorial')])

		<div class="section-header">
			<h3 class="section-title text-center ">Start2bee Travessera</h3>
		</div>
		@include('partials.venues', ['spaces' => config('spaces.travessera')])

		<div class="section-header">
			<h3 class="section-title text-center ">Start2bee Verdi/Park Güell</h3>
		</div>
		@include('partials.venues', ['spaces' => config('spaces.verdi')])

	</div>
</section>

<section class="pricing-section" id="pricing-plans">
<div class="container">

	<h2 class="main-page-header">Servicios disponibles</h2>
	<ul class="includes">
		<li>Conexion de fibra óptica 300MB, cableado y WiFi.</li>
		<li>Amplia Zona de cocina y descanso.</li>
		<li>Calling Room, para hablar totalmente en privado.</li>
		<li>Sistema de climatización independiente por sala y renovación de aire.</li>
		<li>Sistema de alarma, cctv, control de acceso y sistema anti-incendios.</li>
	</ul>
</div>
</section>

<section class="bg-dark pricing-section" id="price-faq">
<div class="container">
	<div id="pricing-faq">
		<h1>Preguntas frecuentes</h1>
		<ul class="col-sm-12">
			<li class="col-sm-6">
				<h3>¿Puedo traer mi propio catering?</h3>
				<p>
					Sí, disponemos de una zona de office que puedes utilizar, equipada con cubiertos, vasos, platos, etc. Que deberás colocar en el
					lavavajillas una vez finalizado el catering. 
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Ofrecemos servicio de catering?</h3>
				<p>
					Podemos encargaros un desayuno o pica-pica bajo petición previa.
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Qué son los bonos de tiempo?</h3>
				<p>
					Comprar por adelantado el tiempo de una sala para ahorrar en costes. Podrás consumir el tiempo a tu medida.
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Qué caducidad tienen los bonos de tiempo?</h3>
				<p>
					Los bonos de tiempo caducan a los tres meses. 
				</p>
			</li>
		</ul>
	</div>
</div>
</section>


@stop