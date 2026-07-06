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
    'namestudio_overlay_enabled' => env('NAMESTUDIO_OVERLAY_ENABLED', true),

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

    's3_asset_url' => env('S3_ASSET_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | Brightcove Player ID
    |--------------------------------------------------------------------------
    |
    | This option is for the Brightcove Player ID used in the Video.js player.
    | You can set this in your ".env" file using the BRIGHTCOVE_PLAYER_ID variable.
    |
    */
    'brightcove_account_id' => '6056665203001',
    'brightcove_player_id' => 'vJVBLg3XR',

    /*
    |--------------------------------------------------------------------------
    | Default Value for Video ID and E-Book URL
    |--------------------------------------------------------------------------
    |
    | This option defines the default value for video ID and e-book URL used in the application.
    |
    */
    'default_video_id' => '6056665203001',
    'default_ebook' => 'https://d306cf1i69iwcu.cloudfront.net/onlinebersama/documents/Entrepreneurial_Mindset.pdf',

    /*
    |--------------------------------------------------------------------------
    | Video ID
    |--------------------------------------------------------------------------
    |
    | This option defines the video ID used in the application.
    |
    */
    'video_id' => [
        // Position Video: Navigation Bar (Dropdown) and Panduan Belajar Page
        'startup_experience' => 6365586738112,

        // Position Video: Home Page, Panduan Belajar Page
        'ikat_indonesia' => 6365585682112,

        'bukan_sekadar_domain' => 6399828948112,

        // Position Video: Use Case Page (Website, Email, Social Media)
        'website' => 6399827707112,
        'email' => 6399829651112,
        'social_media' => 6399829157112,

        // Position Video: Use Case Page (Email)
        'tiga_cara' => 6398669179112,

        // Position Video: Temukan .com Page
        'tiga_tips' => 6398667906112
    ],
];
