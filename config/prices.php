<?php

return [

	'monthly' => [

		[
			'id' => 'part-time',
			'name' => 'Media Jornada',
			'price' => '75',
			'featured' => false,
			'perks' => [
				'9-14h ó 15-20h',
				'Lunes a Viernes',
				'Mesa Propia',
				'Taquilla',
				'Impresiones/Escáner',
				'<span class="knowMore" title="Reuniones en Sala Drone y descuento en resto de salas">Salas de Reuniones</span>',
			 ]

		],
		[
			'id' => 'full-time',
			'name' => 'Jornada Completa',
			'price' => '140',
			'featured' => true,
			'perks' => [
				'de 9h a 20h',
				'Lunes a Viernes',
				'Mesa Propia',
				'Taquilla',
				'Impresiones',
				'<span class="knowMore" title="No recibimos correo certificado.">Recepción de correo/paquetería</span>',
				'<span class="knowMore" title="Reuniones en Sala Drone y 5h en el resto de salas.">Salas de Reuniones</span>',
				
			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => 'Jornada Completa <p>para dos personas.</p>',
			'price' => '190',
			'featured' => false,
			'perks' => [
				'de 9h a 20h',
				'Lunes a Viernes',
				'Mesa Compartida',
				'Taquilla Compartida',
				'Impresiones',
				'<span class="knowMore" title="No recibimos correo certificado.">Recepción de correo/paquetería</span>',
				'<span class="knowMore" title="Reuniones en Sala Drone y 5h en el resto de salas.">Salas de Reuniones</span>',

			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => 'Residente <p>24/7</p>',
			'price' => '220',
			'featured' => false,
			'perks' => [
				'Acceso 24h',
				'Lunes a Domingo',
				'Mesa propia fija',
				'Taquilla propia',
				'Impresiones',
				'<span class="knowMore" title="No recibimos correo certificado.">Recepción de correo/paquetería</span>',
				'<span class="knowMore" title="Reuniones en Sala Drone y 12h en el resto de salas.">Salas de Reuniones</span>',

			 ]
			
		],

	],

	'monthlyVerdi' => [

		[
			'id' => 'part-time',
			'name' => 'Media Jornada',
			'price' => '60',
			'featured' => false,
			'perks' => [
				'9-14h ó 15h-19h',
				'Lunes a Viernes',
				'Mesa Propia',
				'Taquilla',
				'Impresiones/Escáner',
				'<span class="knowMore" title="Reuniones en Start2bee Escorial: Sala Drone y descuento en resto de salas">Salas de Reuniones</span>',
			 ]

		],
		[
			'id' => 'full-time',
			'name' => 'Jornada Completa',
			'price' => '90',
			'featured' => true,
			'perks' => [
				'de 9h a 19h',
				'Lunes a Viernes',
				'Mesa Propia',
				'Taquilla',
				'Impresiones',
				'<span class="knowMore" title="No recibimos correo certificado.">Recepción de correo</span>',
				'<span class="knowMore" title="Recibimos tu paquetería en Start2bee Escorial">Recepción de Paquetería</span>',
				'<span class="knowMore" title="Reuniones en Start2bee Escorial: Sala Drone y 5h en el resto de salas.">Salas de Reuniones</span>',
				
			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => 'Residente <p>24/7</p>',
			'price' => '135',
			'featured' => false,
			'perks' => [
				'Acceso 24h',
				'Lunes a Domingo',
				'Mesa propia fija',
				'Taquilla propia',
				'Impresiones',
				'<span class="knowMore" title="No recibimos correo certificado.">Recepción de correo/paquetería</span>',
				'<span class="knowMore" title="Recibimos tu paquetería en Start2bee Escorial">Recepción de Paquetería</span>',
				'<span class="knowMore" title="Reuniones en Start2bee Escorial: en Sala Drone y 12h en el resto de salas.">Salas de Reuniones</span>',

			 ]
			
		],

	],
	'daily' => [
		[
			'id' => 'part-time',
			'name' => 'Hora',
			'price' => '2',
			'featured' => false,
			'perks' => [
				'Lunes a Viernes'
			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => 'Diario',
			'price' => '12',
			'featured' => false,
			'perks' => [
				'9-20h',
				'Lunes a Viernes',
				'<span class="knowMore" title="1h de Reunión en Sala Drone">Reuniones en Drone Table</span>'
			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => '5 días',
			'price' => '30',
			'price_fulltime' => '60',
			'featured' => true,
			'perks' => [
				'Lunes a Viernes',
				'<span class="knowMore" title="1h de Reunión en Sala Drone (sólo en jornada completa)">Reuniones en Drone Table</span>',
				'A usar en tres meses',
			 ]
		],
		[
			'id' => 'part-time',
			'name' => '10 días',
			'price' => '50',
			'price_fulltime' => '100',
			'featured' => false,
			'perks' => [
				'Lunes a Viernes',
				'<span class="knowMore" title="1h de Reunión en Sala Drone (sólo en jornada completa)">Reuniones en Drone Table</span>',
				'A usar en tres meses',


			 ]
		]
	],
	'dailyVerdi' => [

		[
			'id' => 'part-time',
			'name' => 'Diario',
			'price' => '9',
			'featured' => false,
			'perks' => [
				'9-19h',
				'Lunes a Viernes',
			 ]
			
		],
		[
			'id' => 'part-time',
			'name' => '10 días',
			'price' => '80',
			'featured' => false,
			'perks' => [
				'9-19h',
				'Lunes a Viernes',
				'A usar en tres meses',


			 ]
		]
	]

];