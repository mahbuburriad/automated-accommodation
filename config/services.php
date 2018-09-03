<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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


'facebook' => [
    'client_id' => '720207838164896',         // Your facebook Client ID
    'client_secret' => 'ae382d141485378090500e88afe9f900', // Your facebook Client Secret
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

'google' => [
    'client_id' => '525049061868-ds5r2n8dvifaf0jgdhs9mogsv2fo4c8v.apps.googleusercontent.com',         // Your google Client ID
    'client_secret' => 'keekFi4L8WrdsaLT_Oya7l3i', // Your google Client Secret
    'redirect' => 'http://localhost:8000/login/google/callback',
    ],

];

