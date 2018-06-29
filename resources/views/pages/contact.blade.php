@extends('start2bee')
@section('content')
@include('partials.slide',['name' => 'contact',
'title' => 'Encuéntranos en Gràcia',
'description' => 'Espacio de Coworking en Barcelona'
])
<section id="center">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center  ">Nuestros Espacios</h2>
			<p class="text-center  ">
				Nuestros espacios están en pleno barrio de Gràcia. Rodeados de muchas cosas interesantes, el Park Güell, los cines Verdi,
				un montón<br> de restaurantes y bares y todo los servicios que necesites. El acceso es muy fácil, tenemos las paradas de metro Joanic (L4) y Lesseps (L3).
			</p>
		</div>
		<div >
			<div class="row">
				<div class="col-sm-12 margin-text">
					<h2>Start2bee Escorial</h2>
				</div>
				<div class="col-sm-12 center">
					<div id="id" class="col-sm-7 pictures">
						<img class="img-responsive" src="{{ asset("assets/images/contact/escorial.jpg") }}" alt="start2bee escorial 180">
					</div>
					<div class="col-sm-5 description">
						<h4>¿Por qué visitarlo?</h4>
						<p>Nuestro coworking, donde están la mayoría de nuestros Bees. También tenemos salas para eventos y reuniones o
						cualquier cosa que quieras organizar. No te puedes perder nuestro office.</p>
						<p><i class="fa fa-map-marker"></i> Carrer de L'Escorial 180, 08024 Barcelona</p>
						<h4>Cómo llegar</h4>
						<p><strong>Metro:</strong> Lesseps (L3), Joanic o Alfons X(L4)</p>
						<p><strong>Bus:</strong> Travessera de Dalt (24,32,H6), Carrer de les Camèlies (24,32,39,116)</p>
						<p><strong>Bicing:</strong> Carrer del Cardener, 80</p>
						<p><strong>Parking:</strong> Parking Massens (Carrer de Massens, 77) Parking Gimnasio Holmes Place (Carrer del Secretari Coloma, 130)
							Parking Escorial ( Carrer de L'Escorial 100, )
						</p>
						<p><strong>Moto:</strong> Puedes aparcar justo delante del coworking.</p>
						
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-sm-12 text-center">
					<div class="margin-info" >
						<h2 class="section-title text-center ">La recepción</h2>
						En donde te esperan Dante y Ana para darte la bienvenida y enseñarte las instalaciones. Pásaste cuando quieras, <br>estaremos aquí para recibirte con mucho gusto. Nuestro horario de oficina es
						9:00 a 14:00 y 15:30 a 20:00.

					</div>
					<div class="row">
						<div class="col-sm-6">
							<img class="img-responsive" src="{{ asset("assets/images/venues/recepcion01.jpg") }}" >
						</div>
						<div class="col-sm-6">
							<img class="img-responsive" src="{{ asset("assets/images/venues/recepcion02.jpg") }}" >
						</div>
					</div>
				</div>
				<div class="col-sm-12 text-center">
					<div class="margin-info" >
						<h2 class="section-title text-center ">El office</h2>
						A todo el mundo le encanta nuestro office, tenemos varias cafeteras, echa una moneda y sácate un café de primera o usa nuestra nespresso. <br>
						Calienta tu comida en los microondas y busca tu hueco entre nuestros coworkers para compartir tu rato de comida. 
					</div>
					<div class="row">
						<div class="col-sm-12">
							<img class="img-responsive" src="{{ asset("assets/images/venues/cocina01.jpg") }}" >
						<br><br>

						</div>


						<div class="col-sm-6">
							<img class="img-responsive" src="{{ asset("assets/images/venues/cocina02.jpg") }}" >
						</div>
						<div class="col-sm-6">
							<img class="img-responsive" src="{{ asset("assets/images/venues/sofa.jpg") }}" >
						</div>
					</div>
				</div>
				<div class="col-sm-12 margin-text">
					<hr>
					<h2>Start2bee Park Güell</h2>
				</div>
				<div class="col-sm-12 center">
					<div id="id" class="col-sm-7 pictures">
						<img class="img-responsive" src="{{ asset("assets/images/contact/verdi.jpg") }}" alt="start2bee verdi park guell ">
					</div>
					<div class="col-sm-5 description">
						<h4>¿Por qué visitarlo?</h4>
						<p>Aquí están tenéis nuestras oficinas para grupos, una sala compartida para coworking y eventos. </p>
						<p><i class="fa fa-map-marker"></i>  Carrer Albigesos 25-27, 08024 Barcelona</p>
						<h4>Cómo llegar</h4>
						<p><strong>Metro:</strong> Vallcarca y Lesseps (L3)</p>
						<p><strong>Bus:</strong>  Coll de portell-Albigesos (116), Travessera de Dalt (24,32,H6,V17), Av de Vallcarca-Pl Lesseps (27, 87)</p>
						<p><strong>Parking:</strong> Hospital de l\'Esperança (Avinguda del Santuari de Sant Josep de la Muntanya)</p>
						<p><strong>Moto:</strong> Puedes aparcar justo delante del coworking.</p><br><br>
						
						
					</div>
					
				</div>

				<div class="col-sm-12 margin-text">
					<h2>Start2bee Travessera/Lesseps</h2>
				</div>
				<div class="col-sm-12 center">
					<div id="id" class="col-sm-7 pictures">
						<img class="img-responsive" src="{{ asset("assets/images/contact/travessera.jpg") }}" alt="start2bee escorial 180">
					</div>
					<div class="col-sm-5 description">
						<h4>¿Por qué visitarlo?</h4>
						<p>Tenemos mesas agrupadas para equipos.</p>
						<p><i class="fa fa-map-marker"></i> Travessera de Dalt 33, 08024 Barcelona</p>
						<h4>Cómo llegar</h4>
						<p><strong>Metro:</strong> Lesseps (L3)</p>
						<p><strong>Bus:</strong> Lesseps (22), Travessera de Dalt (24,32,H6,V17,116)</p>
						<p><strong>Parking:</strong> Hospital de l\'Esperança (Avinguda del Santuari de Sant Josep de la Muntanya), Mercat de Lesseps</p>
						<p><strong>Moto:</strong> Puedes aparcar justo delante del coworking.</p>
						
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="margin-text"></div>
	</div>
</section>
@include('partials.map')
@stop