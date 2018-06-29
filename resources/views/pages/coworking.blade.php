@extends('start2bee')
@section('content')
  
@include('partials.slide',['name' => 'coworkers', 
						   'title' => 'Trabaja con nosotros',
						   'description' => 'Espacios de Coworking en Barcelona'
						   ])

<section class="bg-dark pricing-columns pricing-section">
<div class="container">

	<h1 class="main-page-header">Tarifas mensuales</h1>
	<h2 class="main-page-header-places">START2BEE ESCORIAL</h2>
	<h3 class="main-sub-header">Nuestras tarifas de <strong>coworking</strong> mensuales.</h3>

	<div id="pricing-chart" class="col-sm-12">
			
			@foreach(config('prices.monthly') AS $price)
			<div class="col-sm-6 col-md-3 col-xs-12 plan @if($price['featured']) popular @endif">
				
				<h3>{!! $price['name'] !!}</h3>
				<div class="price">
					<span class="amount">{{ $price['price'] }}</span>
					<span class="dollar">€</span>
					<span class="month">mes</span>
				</div>
				<ul>
					@foreach($price['perks'] AS $perk)
					<li>{!!$perk!!}</li>
					@endforeach
				</ul>
			</div>
			@endforeach
	</div>
	<div style="height: 10px; clear: both;"></div>
	<h2 class="main-page-header-places">START2BEE VERDI/PARK GÜELL</h2>
	<h3 class="main-sub-header">Con zona de <strong>aparcamiento gratuito</strong>.</h3>

	<div id="pricing-chart" class="col-sm-12">
			
			@foreach(config('prices.monthlyVerdi') AS $price)
			<div class="col-sm-4 col-xs-12 plan @if($price['featured']) popular @endif">
				
				<h3>{!! $price['name'] !!}</h3>
				<div class="price">
					<span class="amount">{{ $price['price'] }}</span>
					<span class="dollar">€</span>
					<span class="month">mes</span>
				</div>
				<ul>
					@foreach($price['perks'] AS $perk)
					<li>{!!$perk!!}</li>
					@endforeach
				</ul>
			</div>
			@endforeach
	</div>

	<h3 class="mainSubHeader">Hacemos planes personalizados</h3>

	<h1 class="main-page-header">Tarifas flexibles</h1>

	<h2 class="main-page-header-places">START2BEE ESCORIAL</h2>
	<h3 class="main-sub-header">Nuestros <strong>bonos flexibles</strong> para que los uses como quieras.</h3>
		<div id="pricing-chart" class="col-sm-12">
				
				@foreach(config('prices.daily') AS $price)
				<div class="col-sm-6 col-md-3 col-xs-12 plan height @if($price['featured']) popular @endif">

					
					<h3>{!! $price['name'] !!}</h3>
					
					@if(isset($price['price_fulltime']))
					<div class="couponPrice">
						<div class="couponName"><p>{{ $price['price'] }}<span class="dollar">€</span></p> <span class="knowMore" title="9-14h ó 15-20h">MEDIA JORNADA</span> </div>
						<div class="couponName"><p>{{$price['price_fulltime']}}<span class="dollar">€</span></p> <span class="knowMore" title="9-20h">JORNADA COMPLETA</span></div>
					</div>
					@else
						<div class="price">
							<span class="amount">{{ $price['price'] }}</span>
							<span class="dollar">€</span>
						</div>
					@endif

					<ul>
						@foreach($price['perks'] AS $perk)
						<li>{!!$perk!!}</li>
						@endforeach
					</ul>
				</div>
				@endforeach
				
				
			
		</div>

	<h2 class="main-page-header-places">START2BEE VERDI/PARK GÜELL</h2>
	<h3 class="main-sub-header">Con zona de <strong>aparcamiento gratuito</strong>.</h3>
	
		<div id="pricing-chart" class="col-sm-12">
				
				@foreach(config('prices.dailyVerdi') AS $price)
				<div class="col-sm-6 col-xs-12 plan height @if($price['featured']) popular @endif">

					
					<h3>{!! $price['name'] !!}</h3>
					
					@if(isset($price['price_fulltime']))
					<div class="couponPrice">
						<div class="couponName"><p>{{ $price['price'] }}<span class="dollar">€</span></p> <span class="knowMore" title="9-14h ó 15-20h">MEDIA JORNADA</span> </div>
						<div class="couponName"><p>{{$price['price_fulltime']}}<span class="dollar">€</span></p> <span class="knowMore" title="9-20h">JORNADA COMPLETA</span></div>
					</div>
					@else
						<div class="price">
							<span class="amount">{{ $price['price'] }}</span>
							<span class="dollar">€</span>
						</div>
					@endif

					<ul>
						@foreach($price['perks'] AS $perk)
						<li>{!!$perk!!}</li>
						@endforeach
					</ul>
				</div>
				@endforeach
						

	<h3 class="mainSubHeader">Nuestros precios no incluyen IVA</h3>

</div>
</section>
<section class="pricing-section" id="pricing-plans">
<div class="container">

	<h2 class="main-page-header">Todos los planes incluyen</h2>
	<ul class="includes">
		<li>Conexion de fibra óptica 300MB, cableado y WiFi.</li>
		<li>Amplia Zona de cocina y descanso.</li>
		<li>Limpieza diaria.</li>
		<li>Calling Room, para hablar totalmente en privado.</li>
		<li>Sistema de climatización y renovación de aire por salas.</li>
		<li>Sistema de alarma, cctv, control de acceso y sistema anti-incendios.</li>
		<li>Mesa de 150x75cm. con silla ergonómica, 4 enchufes, toma de red RJ-45.</li>
		<li>Mantenimiento y suministros.</li>
		<li>Tu slide/publicidad en escaparate.</li>
	</ul>
	<div style="height: 40px; clear: both;"></div>
	<h2 class="main-page-header">Servicios Adicionales</h2>
	<ul class="includes">
		<li>Teclado inalámbrico y monitor Full HD. 10 €/mes</li>
		<li>Domiciliación comercial, paquetería. 30 €/mes</li>
		<li>Thin Client. 20 €/mes</li>
		<li>Impresiones BN(0,20 €) y color (0,40 €)</li>
	</ul>

</div>
</section>
<section class="bg-dark pricing-section" id="price-faq">
<div class="container">
	<div id="pricing-faq">
		<h1>Preguntas frecuentes</h1>
		<ul class="col-sm-12">
			<li class="col-sm-6">
				<h3>¿Todas las tarifas incluyen taquilla?</h3>
				<p>
					Sólo las tarifas mensuales incluyen taquillas. Esta opción no está disponible para las tarifas flexibles (bonos).
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Todas las tarifas incluyen impresiones?</h3>
				<p>
					Sí, las tarifas mensuales incluyen impresiones (hasta 200 hojas/mes). Para las tarifas flexibles consultar precios en servcios
					adicionales.
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Las tarifas tienen permanencia mínima?</h3>
				<p>
					Puedes cambiar de tarifa cuantas veces necesites mes a mes.
				</p>
			</li>
			<li class="col-sm-6">
				<h3>¿Necesitas hablar por teléfono desde tu mesa de trabajo?</h3>
				<p>
					Disponemos de un espacio de coworking, Start2bee Verdi/Park Güell desde donde puedes hablar en tu misma mesa de trabajo. Consúltanos.
				</p>
			</li>
		</ul>
	</div>
</div>
</section>
@stop
