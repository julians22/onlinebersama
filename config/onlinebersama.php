<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Namestudio Overlay Enabled
    |--------------------------------------------------------------------------
    |
    | This option controls whether the Namestudio overlay is enabled or not.
    | You can set this in your ".env" file using the NAMESTUDIO_OVERLAY_ENABLED variable.
    |
    */
    'namestudio_overlay_enabled' => env('NAMESTUDIO_OVERLAY_ENABLED', false),

    /*
    |--------------------------------------------------------------------------
    | Namestudio API Key
    |--------------------------------------------------------------------------
    |
    | This option is for the Namestudio API key. You can set this in your ".env" file using the NAMESTUDIO_API_KEY variable
    |
    */
    'namestudio_api_key' => env('NAMESTUDIO_API_KEY', ''),
];
