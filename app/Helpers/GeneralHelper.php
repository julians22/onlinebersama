<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('articleViews')){

    function articleViews()
    {
        $articleViews = Storage::disk('article_view')->allFiles();

        return $articleViews;
    }

}

if (!function_exists('')) {
    function appName() : string
    {
        $appName = config('app.name');
        return $appName;
    }
}
