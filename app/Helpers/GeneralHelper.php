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
        $check_image_exists = file_exists(public_path('images/articles/' . $slug . '.webp'));
        if (!$check_image_exists) {
            return asset('images/articles/default-image.webp');
        }

        return asset('images/articles/' . $slug . '.webp');
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

if (!function_exists('realUserIp')) {
    function realUserIp(?\Illuminate\Http\Request $request = null): ?string
    {
        $request ??= request();

        $headers = [
            'CloudFront-Viewer-Address',
            'True-Client-IP',
            'X-Real-IP',
            'X-Forwarded-For',
            'CF-Connecting-IP',
        ];

        $candidates = [];

        foreach ($headers as $header) {
            $value = $request->header($header);

            if (!is_string($value) || trim($value) === '') {
                continue;
            }

            foreach (explode(',', $value) as $part) {
                $ip = trim($part);

                // CloudFront-Viewer-Address can be formatted as "IP:port".
                if ($header === 'CloudFront-Viewer-Address') {
                    if (preg_match('/^\[(.*)\]:(\d+)$/', $ip, $matches) === 1) {
                        $ip = $matches[1];
                    } elseif (preg_match('/^(\d+\.\d+\.\d+\.\d+):(\d+)$/', $ip, $matches) === 1) {
                        $ip = $matches[1];
                    }
                }

                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                    $candidates[] = $ip;
                }
            }
        }

        if (filter_var($request->ip(), FILTER_VALIDATE_IP)) {
            $candidates[] = $request->ip();
        }

        $candidates = array_values(array_unique($candidates));

        foreach ($candidates as $candidate) {
            if (filter_var($candidate, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                return $candidate;
            }
        }

        return $candidates[0] ?? null;
    }
}
