@extends('start2bee')

@section('content')

@include('partials.slide',['name' => 'teams', 
						   'title' => 'TEAMS',
						   'description' => 'Trae a tu equipo a nuestro espacio'
						   ])

<section class="bg-dark">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center  ">Tu equipo, en ambiente de coworking</h2>
			<p class="text-center  ">
				Comparte espacio con otros equipos como el tuyo, haz networking. 
			</p>
		</div>

		<div class="section-header">
			<h3 class="text-center">Start2bee Travessera / Lesseps</h3>
		</div>
		@include('partials.teams', ['spaces' => config('teams.escorial')])
	<h3 class="mainSubHeader">Nuestros precios no incluyen IVA</h3>

	</div>

</section>

<section class="pricing-section" id="pricing-plans">
<div class="container">

	<h2 class="main-page-header">Servicios disponibles</h2>
	<ul class="includes">
		<li>Conexion de fibra óptica 300MB, cableado y WiFi.</li>
		<li>Zona de office y descanso.</li>
		<li>Dos salas de reunión para tus meetings.</li>
		<li>Sistema de climatización y renovación de aire.</li>
		<li>Sistema de alarma, cctv, control de acceso y sistema anti-incendios.</li>
		<li>Servicio de limpieza diaria.</li>
	</ul>
</div>
</section>




@stop
