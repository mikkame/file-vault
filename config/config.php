<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Encryption Key and Cipher
    |--------------------------------------------------------------------------
    */

    'key' => env('FILE_VAULT_KEY', env('APP_KEY')),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Default storage disk
    |--------------------------------------------------------------------------
    */

    'disk' => 'local',
];
