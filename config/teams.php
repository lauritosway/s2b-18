<?php

$travessera = 'Start2bee Travessera';


return [
    'escorial' => [
        [
            'id' => 'team8',
            'title' => 'TEAM 8',
            'description' => 'Isla de mesas de trabajo de hasta 8 personas pensadas para trabajar en equipo. Agrupadas en local compartido.',
            'prices' => [
                'Hasta 8 personas' => '800€ / mes',
            ],
            'bono' => '75€ / 10h',
            'where' => $travessera,
            'images' => [
                ['url' => 'team801.jpg'],
                ['url' => 'team802.jpg']

            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 8 personas'],
                ['icon' => 'user','name' => '40 Horas de reuniones en despacho privado'],
                ['icon' => 'user','name' => 'Sillas ergonómicas y mesas amplias'],

            ]
        ],
        [
            'id' => 'team6',
            'title' => 'TEAM 4-6',
            'description' => 'Islas de mesas de trabajo de hasta 4-6 personas pensadas para trabajar en equipo. Agrupadas en local compartido.',
            'prices' => [
                'Hasta 4 personas' => '400€ / mes',
                'Hasta 6 personas' => '600€ / mes'
            ],
            'bono' => '75€ / 10h',
            'where' => $travessera,
            'images' => [
                ['url' => 'team601.jpg'],
                ['url' => 'team602.jpg'],
                ['url' => 'team603.jpg']
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 4-6 personas'],
                ['icon' => 'user','name' => '20-30 Horas de reuniones en despacho privado'],
                ['icon' => 'user','name' => 'Sillas ergonómicas y mesas amplias'],

            ]
        ],
        [
            'id' => 'team2',
            'title' => 'TEAM 2',
            'description' => 'Isla de mesas de trabajo de hasta 2 personas pensadas para trabajar en equipo. Agrupadas para equipos en local compartido.',
            
            'prices' => [
                'Hasta 2 personas' => '200€ / mes'
            ],
            'bono' => '75€ / 10h',
            'where' => $travessera,
            'images' => [
                ['url' => 'team201.jpg'],
                ['url' => 'team202.jpg']
            ],
            'perks' => [
                ['icon' => 'user','name' => 'Hasta 2 personas'],
                ['icon' => 'user','name' => '10 Horas de reuniones en despacho privado'],
                ['icon' => 'user','name' => 'Sillas ergonómicas y mesas amplias'],

            ]
        ],
        
    ]
];
