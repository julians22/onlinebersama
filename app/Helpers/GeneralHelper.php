<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('articleViews')){

    function articleViews()
    {
        $articleViews = Storage::disk('article_view')->allFiles();

        return $articleViews;
    }
}

if (!function_exists('articleViewsOptions')){
    function articleViewsOptions($folderNameToRemove = 'dynamic')
    {
        $articleViews = articleViews();

        $options = [];
        foreach ($articleViews as $file) {
            $optionValue = str_replace('.blade.php', '', $file);
            $optionValue = str_replace($folderNameToRemove . '/', '', $optionValue);
            $options[] = $optionValue;
        }
        return $options;
    }
}

if (!function_exists('')) {
    function appName() : string
    {
        $appName = config('app.name');
        return $appName;
    }
}
