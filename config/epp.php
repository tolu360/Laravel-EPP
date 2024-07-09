<?php

/*
 * EPP Connection settings
 */

return [
    'registrars' => [
        'sidn' => [
            'username' => env('SIDN_USERNAME'),
            'password' => env('SIDN_PASSWORD'),
            'hostname' => env('SIDN_HOSTNAME'),
            'port'     => env('SIDN_PORT', 700),
            'timeout'  => env('SIDN_TIMEOUT', 30),
        ],
    ],
    'debug' => env('EPP_DEBUG', false),
    'verify_peer' => env('EPP_VERIFY_PEER', false),
    'verify_peer_name' => env('EPP_VERIFY_PEER_NAME', false),
];
