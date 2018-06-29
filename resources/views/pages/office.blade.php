@extends('start2bee')

@section('content')

@include('partials.slide',['name' => 'oficina', 
						   'title' => 'Oficinas privadas',
						   'description' => 'Todos los servicios incluídos'
						   ])


<section class="bg-dark">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center  ">Concéntrate en tu trabajo</h2>
			<p class="text-center  ">
				Nosotros nos encargamos del resto.  Nunca había sido tan fácil. Nosotros ponemos el espacio, nos encargamos de las facturas de luz, agua e internet.

			</p>
		</div>

		<div class="section-header">
			<h3 class="section-title text-center ">Start2bee Verdi/Park Güell</h3>
		</div>
		@include('partials.office', ['spaces' => config('offices.verdi')])
	</div>
</section>

<section class="pricing-section" id="pricing-plans">
<div class="container">

	<h2 class="main-page-header">Servicios disponibles</h2>
	<ul class="includes">
		<li>Conexion de fibra óptica 300MB, cableado y WiFi.</li>
		<li>Dispone de office completamente equipado.</li>
		<li>Sistema de climatización por salas y renovación de aire.</li>
		<li>Sistema de alarma, cctv, control de acceso y sistema anti-incendios.</li>
		<li>Aseo y ducha disponibles.</li>
		<li>Limpieza dos veces por semana.</li>
		<li>Recepción de correo ordinario.</li>
		<li>Zona de recepción de llamadas y descanso.</li>

	</ul>
</div>
</section>

<section class="bg-dark pricing-section" id="price-faq">
<div class="container">
	<div id="pricing-faq">
		<h1>Preguntas frecuentes</h1>
		<ul class="col-sm-12">
			<li class="col-sm-6">
				<h3>¿Existe periodo de permanencia?</h3>
				<p>
					En caso de los despachos hay un periodo de permanencia mínimo de un mes.
				</p>
			</li>

		</ul>
	</div>
</div>
</section>


@stop