<?php

$escorial = 'Start2bee Escorial';
$verdi = 'Start2bee Verdi';
$travessera = 'Start2bee Travessera';


return [
        'escorial' => [
        [
            'id' => 'droneTable',
            'title' => 'Drone Table',
            'description' => 'Sala multiusos especial para videoconferencias grupales. 
        					  Puede usarse también para cursos, talleres, etc. 
        					  Esta sala está junto al office, separada por una cortina.',
            'prices' => [
                'hour' => 10,
                'halfday' => 35,
                'day' => 75
            ],
            'bono' => '75€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'droneTable01.jpg'],
                ['url' => 'droneTable02.jpg'],
                ['url' => 'droneTable03.jpg'],
                ['url' => 'droneTable04.jpg']
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 5 personas'],
                ['icon' => 'user','name' => 'Pantalla para videoconferencias'],
                ['icon' => 'user','name' => 'Sofá y butacas'],
                ['icon' => 'user','name' => 'Pizarra con caballete'],

            ],
            /*
            'distribution' => [
                ['id' => 'drone01', 'name' => 'Reunión', 'url' => 'drone01.jpg' ],
            ]*/
        ],
        [
            'id' => 'droneTablePlus',
            'title' => 'Drone Table Plus',
            'description' => 'Sala multiusos especial para videoconferencias, cursos, talleres, etc. 
                              Esta sala está junto al office, separada por una cortina, añadimos una mesa
                              para aumentar el espacio disponible.',
            'prices' => [
                'hour' => 15,
                'halfday' => 50,
                'day' => 95
            ],
            'bono' => '95€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'droneTablePlus01.jpg'],
                ['url' => 'droneTablePlus02.jpg'],
                ['url' => 'droneTablePlus03.jpg']            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 10 personas'],
                ['icon' => 'user','name' => 'Pantalla para videoconferencias'],
                ['icon' => 'user','name' => 'Butacas'],
                ['icon' => 'user','name' => 'Pizarra con caballete'],

            ]
        ],        
        [
            'id' => 'beekeeperVip',
            'title' => 'Beekeeper Vip',
            'description' => 'Despacho privado acristalado y muy luminoso para reuniones. Con capacidad hasta 8 personas.',
            'prices' => [
                'hour' => 25,
                'halfday' => 75,
                'day' => 110
            ],
            'bono' => '140€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'beekeepervip01.jpg'],
                ['url' => 'beekeepervip02.jpg'],
                ['url' => 'beekeepervip03.jpg'],
                ['url' => 'beekeepervip04.jpg'],
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 5 personas en mesa de reunión'],
                ['icon' => 'user','name' => 'Hasta 8 personas en sillas'],
                ['icon' => 'user','name' => 'Pantalla para video-conferencia'],
                ['icon' => 'user','name' => 'Pizarra con caballete'],
            ],
        ],
        [
            'id' => 'jelly',
            'title' => 'Jelly',
            'description' => 'Sala polivalente, con 4 puestos de coworking que 
                              se convierte en sala para conferencias, cursos, talleres, etc. 
                              Se separa de la sala Buzz por una puerta corredera plegable.',
            'prices' => [
                'hour' => 20,
                'halfday' => 60,
                'day' => 100
            ],
            'bono' => '120€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'jelly01.jpg'],
                ['url' => 'jelly02.jpg'],
                ['url' => 'jelly03.jpg'],
                ['url' => 'jelly04.jpg'],
                ['url' => 'jelly05.jpg'],

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 8 personas con o sin mesa redonda.'],
                ['icon' => 'user','name' => 'Pizzara gigante interactiva con proyector.'],
                ['icon' => 'user','name' => 'Pizarra tradicional velleda y caballete.'],
                ['icon' => 'user','name' => 'Luz natural y eléctrica regulable.'],




            ],
        ],
        [
            'id' => 'jellyBuzz',
            'title' => 'Jelly+Buzz',
            'description' => 'Sala amplia y polivalente, con 12 puestos de coworking que 
                              se convierte en sala para conferencias, cursos, talleres, filmaciones, etc. 
                              Alquiler mínimo dos horas. Luz eléctrica regulable.',
            'prices' => [
                'hour' => 45,
                'halfday' => 135,
                'day' => 225
            ],
            'bono' => '350€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'jellyBuzz01.jpg'],
                ['url' => 'jellyBuzz02.jpg'],
                ['url' => 'jellyBuzz03.jpg'],
                ['url' => 'jellyBuzz04.jpg'],
                ['url' => 'jellyBuzz05.jpg'],
                ['url' => 'jellyBuzz06.jpg'],
                ['url' => 'jellyBuzz07.jpg'],


            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 40 personas en sillas.'],
                ['icon' => 'user','name' => 'Pizarra gigante interactiva con proyector.'],
                ['icon' => 'user','name' => 'Pizarra tradicional velleda. Pizarra con caballete.'],
            ],
        ],
        [
            'id' => 'honeyBees',
            'title' => 'Honeybees',
            'description' => 'Sala con hasta 20 puestos de coworking que se convierte en sala polivalente. 
                              Para charlas, cursos, reuniones, videoconferencias, etc. Mínimo dos horas.',
            'prices' => [
                'hour' => 35,
                'halfday' => 90,
                'day' => 165
            ],
            'bono' => '250€ / 10h',
            'where' => $escorial,
            'images' => [
                ['url' => 'honeyBees01.jpg'],
                ['url' => 'honeyBees02.jpg'],
                ['url' => 'honeyBees03.jpg'],
                ['url' => 'honeyBees04.jpg'],

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 30 personas en sillas.'],
                ['icon' => 'user','name' => 'Proyector de alta definición.'],
                ['icon' => 'user','name' => 'Pizzara con caballete y pizarra velleda.'],

            ],
        ] 
    ],
    'travessera' => [
        [
            'id' => 'beeKnees',
            'title' => 'Bee\'s Knees',
            'description' => 'Nuestra sala para reuniones y eventos en Start2bee Travessera con una capacidad de hasta 20 personas.',
            'prices' => [
                'hour' => 20,
                'halfday' => 50,
                'day' => 90
            ],
            'bono' => '150€ / 10h',
            'where' => $travessera,
            'images' => [
                ['url' => 'beeKnees01.jpg'],
                ['url' => 'beeKnees02.jpg'],
                ['url' => 'beeKnees03.jpg'],
                ['url' => 'beeKnees04.jpg'],
                ['url' => 'beeKnees05.jpg'],
                ['url' => 'beeKnees06.jpg'],
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 20 personas.'],
                ['icon' => 'user','name' => 'Proyector de alta definición.'],
                ['icon' => 'user','name' => 'Pizzara con caballete.'],
                ['icon' => 'user','name' => 'Aire acondicionado y calefacción.'],

            ],
        ],
        [
            'id' => 'honeyComb',
            'title' => 'Honeycomb',
            'description' => 'Espacio privado con capacidad hasta 24 personas. Perfecto para sesiones que requieran de privacidad y tranquilidad.' ,            
            'prices' => [
                'hour' => 15,
                'halfday' => 45,
                'day' => 80
            ],
            'bono' => '130€ / 10h',
            'where' => $travessera,
            'images' => [
                ['url' => 'honeyComb01.jpg'],
                ['url' => 'honeyComb02.jpg'],
                ['url' => 'honeyComb03.jpg'],
                ['url' => 'honeyComb04.jpg'],
                ['url' => 'honeyComb05.jpg'],

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 24 personas.'],
                ['icon' => 'user','name' => 'Pizzara con caballete.'],
                ['icon' => 'user','name' => 'Aire acondicionado y calefacción.'],
            ],
        ]       
    ],     
    'verdi' => [
        [
            'id' => 'beeSting',
            'title' => 'Bee Sting',
            'description' => 'Nuestra sala para eventos en Start2bee Verdi. Perfecta para reuniones y talleres, con una capacidad hasta 30 personas.',
            'prices' => [
                'hour' => 20,
                'halfday' => 60,
                'day' => 85
            ],
            'bono' => '150€ / 10h',
            'where' => $verdi,
            'images' => [
                ['url' => 'beeSting01.jpg'],
                ['url' => 'beeSting02.jpg'],
                ['url' => 'beeSting03.jpg'],
                ['url' => 'beeSting04.jpg'],

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 16 personas con mesa.'],
                ['icon' => 'user','name' => 'Hasta 30 personas en sillas.'],
                ['icon' => 'user','name' => 'Proyector de alta definición.'],
                ['icon' => 'user','name' => 'Pizzara con caballete.'],
            ],
        ],
        [
            'id' => 'beeTwo',
            'title' => 'Bee Two',
            'description' => 'De diseño moderno, luminoso y excelente aislamiento acústico.
                             Dispone de mesa fija de vidrio y césped artificial, sistema renovación de aire. Mínimo dos horas.' ,            
            'prices' => [
                'hour' => 9,
                'halfday' => 30,
                'day' => 55
            ],
            'bono' => '80€ / 10h',
            'where' => $verdi,
            'images' => [
                ['url' => 'beeTwo01.jpg'],
                ['url' => 'beeTwo02.jpg'],
                ['url' => 'beeTwo03.jpg'],
                ['url' => 'beeTwo04.jpg'],
                ['url' => 'beeTwo05.jpg'],
                ['url' => 'beeTwo06.jpg']

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 4 personas.'],
                ['icon' => 'user','name' => 'Pizzara con caballete.'],
                ['icon' => 'user','name' => 'Aire acondicionado individual.'],
                ['icon' => 'user','name' => 'Calefacción independiente.'],



            ],
        ]       
    ]                  
];
