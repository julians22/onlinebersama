<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourcesPageController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/cari-nama-domain', 'find')->name('find');
    Route::get('persyaratan-layanan', 'terms')->name('terms');
});

Route::controller(UseCaseController::class)->group(function() {
    Route::get('/penerusan-domain', 'socialMedia')->name('social-media');
    Route::get('/alamat-email-khusus', 'email')->name('email');
    Route::get('/situs-web-profesional', 'websites')->name('websites');
});

Route::name('resources.')->group(function() {
    Route::controller(ResourcesPageController::class)->group(function() {
        Route::get('/panduan-belajar', 'index')->name('index');
        Route::get('/panduan-belajar/{slug}', 'show')->name('show');
        // Route::get('/panduan-belajar/toolbox', 'toolbox')->name('toolbox');
    });
});

Route::get('kumpulan-materi', fn() => redirect()->route('resources.index'));

Route::get('/ip-debug', function () {
    return response()->json([
        'actual_request_ip' => request()->ip(),
        'all_headers' => request()->headers->all(),
        'server_variables' => request()->server->all(),
    ]);
});
