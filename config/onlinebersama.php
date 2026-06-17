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

    /*
    |--------------------------------------------------------------------------
    | Custom Article Route
    |--------------------------------------------------------------------------
    |
    | This option defines the mapping for custom article routes based on the url_name.
    | It is used to determine the parent slug in the URL structure for specific
    | article url_name.
    |
    */
    'custom_article_route' => [
        'default' => 'panduan-belajar',
        'social-media-detail' => 'penerusan-domain',
        'email-detail' => 'alamat-email-khusus',
        'websites-detail' => 'situs-web-profesional'
    ],

    's3_asset_url' => env('S3_ASSET_URL', '')
];
