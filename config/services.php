<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'twilio' => [
        'ACCOUNT_API_KEY' => '9RsaTM4PMdN0kgIhHyK5INxq8r92daYh',
        'ACCOUNT_SID' => 'AC5213ea048da887b95c86dc35054acd27',
        'AUTH_TOKEN' => 'f1ae33d6df11c3f1d9e55d84f536248e',
        'DIAL_CALLER' => '+380937636080',
    ]

];
