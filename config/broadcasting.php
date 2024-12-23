<?php

return [

    'default' => env('BROADCAST_DRIVER', 'null'),

    'connections' => [

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('8d726ed5d141b5235b0b'),
            'secret' => env('b9b9d66d1ba6ab600b87'),
            'app_id' => env('1915496'),
            'options' => [
                'cluster' => env('ap2'),
                'useTLS' => true,
            ],
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
        ],

        'log' => [
            'driver' => 'log',
        ],

        'null' => [
            'driver' => 'null',
        ],

    ],

];