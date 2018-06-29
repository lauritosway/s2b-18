<?php

$escorial = 'Start2bee Escorial';
$verdi = 'Start2bee Verdi';

return [
    'verdi' => [
        [
            'id' => 'beeOne',
            'title' => 'Bee One',
            'description' => 'De diseño moderno, luminoso y excelente aislamiento acústico. Con su propia cerradura independiente. 
                              Dispone de tres armarios de oficina y cuatro mesas distribuibles.
                        ',
            'prices' => [
                'fulltime' => '470€',
                '24h' => '495€'
            ],
            'where' => $verdi,
            'images' => [
                ['url' => 'beeOne01.jpg'],
                ['url' => 'beeOne02.jpg'],
                ['url' => 'beeOne03.jpg'],
                ['url' => 'beeOne04.jpg'],
                ['url' => 'beeOne05.jpg'],
                ['url' => 'beeOne06.jpg']
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 8 personas.'],
                ['icon' => 'user','name' => 'Aire acondicionado.'],
                ['icon' => 'user','name' => 'Calefacción independiente.'],
                ['icon' => 'user','name' => 'Sistema renovación de aire.'],
                ['icon' => 'user','name' => 'Acceso 24/7 y Llave propia.'],

            ]
        ],
        [
            'id' => 'beeTwo',
            'title' => 'Bee Two',
            'description' => 'De diseño moderno, luminoso y excelente aislamiento acústico. Con su propia cerradura independiente. 
                              Dispone de mesa fija de vidrio y cesped artificial con armario empotrado.' ,
            'prices' => [
                'fulltime' => '360€',
                '24h' => '375€'
            ],
            'where' => $verdi,
            'images' => [
                ['url' => 'beeTwo01.jpg'],
                ['url' => 'beeTwo02.jpg'],
                ['url' => 'beeTwo03.jpg'],
                ['url' => 'beeTwo04.jpg']

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 5 personas.'],
                ['icon' => 'user','name' => 'Aire acondicionado.'],
                ['icon' => 'user','name' => 'Calefacción independiente.'],
                ['icon' => 'user','name' => 'Sistema renovación de aire.'],
                ['icon' => 'user','name' => 'Acceso 24/7 y Llave propia.'],

            ]
        ],  
        [
            'id' => 'beeThree',
            'title' => 'Bee Three',
            'description' => 'De diseño moderno, luminoso y excelente aislamiento acústico. Con su propia cerradura independiente. 
                              Dispone de 4 mesas distribuibles con armario empotrado.' ,
            'prices' => [
                'fulltime' => '465€',
                '24h' => '480€'
            ],
            'where' => $verdi,
            'images' => [
                ['url' => 'beeThree01.jpg']

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 4 personas.'],
                ['icon' => 'user','name' => 'Aire acondicionado.'],
                ['icon' => 'user','name' => 'Calefacción independiente.'],
                ['icon' => 'user','name' => 'Sistema renovación de aire.'],
                ['icon' => 'user','name' => 'Acceso 24/7 y Llave propia.']


            ]
        ],     
        [
            'id' => 'beeSting',
            'title' => 'Bee Sting',
            'description' => 'De diseño moderno y luminoso.  
                              Dispone de 6 mesas. Sala independiente sin puerta individual.' ,
            'prices' => [
                'fulltime' => '600€',
                '24h' => '750€'
            ],
            'where' => $verdi,
            'images' => [
                ['url' => 'beeSting01.jpg'],
                ['url' => 'beeSting02.jpg'],
                ['url' => 'beeSting03.jpg'],
                ['url' => 'beeSting04.jpg'],

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 12/14 personas.'],
                ['icon' => 'user','name' => 'Aire acondicionado.'],
                ['icon' => 'user','name' => 'Calefacción independiente.'],
                ['icon' => 'user','name' => 'Sistema renovación de aire.'],


            ]
        ]
    ]                  
];
