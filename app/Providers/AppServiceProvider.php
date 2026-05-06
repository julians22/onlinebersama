<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Memaksa semua URL menggunakan HTTPS
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }

        // Memaksa root URL agar selalu menggunakan /staging
        // Ini memastikan redirect internal tidak 'kabur' ke domain utama
        if (!app()->runningInConsole() && (config('app.env') === 'staging' || config('app.env') === 'production')) {
            URL::forceRootUrl(config('app.url'));
        }
    }
}
