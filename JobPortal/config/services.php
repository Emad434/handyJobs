<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
     'client_id' => '1182810385529706',
     'client_secret' => '9dc74248543e32b5f29dc77e9836ad43',
     'redirect' => 'https://handyjob.gtb2bexim.com/callback/facebook',
   ],
   
   
    'google' => [
        'client_id' => '1027150254342-ocvi7f2mfe74ub45l03i714c4rh7t63e.apps.googleusercontent.com',
        'client_secret' => '7Q1QdlI5iPuD4tglduGaOXYX',
        'redirect' => 'https://handyjob.gtb2bexim.com/callback/google',
    ],

    'stripe' => [
        'key' => 'sk_test_51I023XBvxckVcKFEvTS2h2pnwPOACI3PLSjWKqiP8v8nDdVA8CzyxHa2GJCFD9wpgUmVddctvIMkzQGHrd5kQj3C00dpZjfAZW',
        'secret' => 'pk_test_51I023XBvxckVcKFEmtZxazDi8one7MjC5kGTlREd89CQWdlFM23YPTzxhTEWotJAoUiKm58xRv3uvRcVVDnRbeFB00VWnWwL0E',
    ],

];
