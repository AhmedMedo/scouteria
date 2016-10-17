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

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' =>[
     'client_id' => '1785766641700281',
    'client_secret' => '09ff8e5e0000d84c91c96da05a41051f',
    'redirect' => 'http://localhost:8000/callback',
    
    
  ],
  'google'=>[
     'client_id' => '1055117978375-di5n15j0f3ket5pcujfh7tomips2avvp.apps.googleusercontent.com',
    'client_secret' => 'PKxwj3wynjh2xSs2Zlz5ARPM',
    'redirect' => 'http://localhost:8000/oauth2callback',
    
  ],

   'linkedin'=>[
     'client_id' => '75xgz7idx9ujnr',
    'client_secret' => '0ZMJ5WSj1N3hOxjV',
    'redirect' => 'http://localhost:8000/linkedin/callback',
    
  ],
    'twitter'=>[
     'client_id' => '75xgz7idx9ujnr',
    'client_secret' => '0ZMJ5WSj1N3hOxjV',
    'redirect' => 'http://localhost:8000/linkedin/callback',
    
  ]

];
