<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourcesPageController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/cari-nama-domain', 'find')->name('find');
    Route::get('/kumpulan-materi', 'learning')->name('learning');
});

Route::controller(UseCaseController::class)->group(function() {
    Route::get('/penerusan-domain', 'socialMedia')->name('social-media');
    Route::get('/alamat-email-khusus', 'email')->name('email');
    Route::get('/situs-web-profesional', 'websites')->name('websites');
});

Route::group(['prefix' => 'resources', 'as' => 'resources.'], function() {
    Route::get('/', [ResourcesPageController::class, 'index'])->name('index');
    Route::get('{slug}', [ResourcesPageController::class, 'show'])->name('show');
});

