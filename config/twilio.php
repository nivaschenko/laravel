<?php
use App\Services\Communicate\CommunicateService;

return [

    'default' => CommunicateService::class,

    'drivers' => [

        CommunicateService::class => [

            'sid'   => 'AC5213ea048da887b95c86dc35054acd27',
            'token' => 'f1ae33d6df11c3f1d9e55d84f536248e',

        ],

    ],
];