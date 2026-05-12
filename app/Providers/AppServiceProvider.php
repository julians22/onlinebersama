<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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

        if (config('app.env') === 'staging') {
            Livewire::setUpdateRoute(function ($handle) {
                return Route::post('/staging/livewire/update', $handle)
                    ->middleware(['web']) // Ensure necessary middleware is included
                    ->name('staging.livewire.update'); // Giving it a name is recommended
            });
        }

        // Memaksa root URL agar selalu menggunakan /staging
        // Ini memastikan redirect internal tidak 'kabur' ke domain utama
        if (!app()->runningInConsole() && (config('app.env') === 'staging' || config('app.env') === 'production')) {
            URL::forceRootUrl(config('app.url'));
        }
    }
}
