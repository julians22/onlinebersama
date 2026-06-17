<?php

use App\Models\Post;
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

if (!function_exists('appName')) {
    function appName() : string
    {
        $appName = config('app.name');
        return $appName;
    }
}

if (!function_exists('imageArticle')) {
    function imageArticle(string $slug)
    {
        $check_image_exists = file_exists(public_path('images/articles/' . $slug . '.jpg'));
        if (!$check_image_exists) {
            return asset('images/articles/default-image.jpg');
        }

        return asset('images/articles/' . $slug . '.jpg');
    }
}

if (!function_exists('assetAwsUrl')) {
    function assetAwsUrl(string $key){
        $base_url = config('onlinebersama.s3_asset_url');

        // remove "/" from the start of the key
        $key = ltrim($key, '/');
        return $base_url . '/' . $key;
    }
}
