<?php

use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\ResourcesPageController;
use Illuminate\Support\Facades\Route;


// 1. Home Page
Route::get('/', [FrontendPageController::class, 'index'])->name('index');

// 2. Find a .com
Route::get('temukan-com', [FrontendPageController::class, 'findACom'])->name('find-a-com');
Route::get('find-a-com', fn () => redirect(route('find-a-com'), 301));

// 3. Email
Route::get('email', [FrontendPageController::class, 'email'])->name('email');

// 4. Domain
Route::get('domain', [FrontendPageController::class, 'domain'])->name('domain');

// 5. Website
Route::get('website', [FrontendPageController::class, 'website'])->name('website');

// 6. Resources
Route::group(['prefix' => 'resources', 'as' => 'resources.'], function() {
    Route::get('/', [ResourcesPageController::class, 'index'])->name('index');
    Route::get('{slug}', [ResourcesPageController::class, 'show'])->name('show');
});

