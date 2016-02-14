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

    'mailgun'     => [
        'domain' => env('MAILGUN_DOMAIN','sandboxe11516fcce794fe1bb9e4bc5ec0e31e7.mailgun.org'),
        'secret' => env('MAILGUN_SECRET','key-7d966ccfbf06b6432ce2e8536f3713bc'),
    ],

    'mandrill'    => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses'         => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe'      => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'transloadit' => [
        [
            'key'    => '346447c0be4b11e58822ad144396c0a2',
            'secret' => '184c2bd432dca7a9c32d9b4907e939dd281ca58c',
        ],
        [
            'key'    => 'c0473a00d1b411e58554bf6e7ce998e2',
            'secret' => 'bfa8bbf345c1fe0c50ae7ea240aabd4882ae1efe',
        ],
    ],
];