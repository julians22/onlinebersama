<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourcesPageController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/find-a-com', 'find')->name('find');
});

Route::controller(UseCaseController::class)->group(function() {
    Route::get('/use-case-social-media', 'socialMedia')->name('social-media');
    Route::get('/use-case-email', 'email')->name('email');
    Route::get('/use-case-websites', 'websites')->name('websites');
});

Route::group(['prefix' => 'resources', 'as' => 'resources.'], function() {
    Route::get('/', [ResourcesPageController::class, 'index'])->name('index');
    Route::get('{slug}', [ResourcesPageController::class, 'show'])->name('show');
});

