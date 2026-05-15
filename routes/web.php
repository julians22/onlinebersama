<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourcesPageController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/cari-nama-domain', 'find')->name('find');
});

Route::controller(UseCaseController::class)->group(function() {
    Route::get('/penerusan-domain', 'socialMedia')->name('social-media');
    Route::get('/alamat-email-khusus', 'email')->name('email');
    Route::get('/situs-web-profesional', 'websites')->name('websites');
});

Route::name('resources')->group(function() {
    Route::controller(ResourcesPageController::class)->group(function() {
        Route::get('/kumpulan-materi', 'index');
        Route::get('{slug}', 'show')->name('.show');
    });
});
