<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ResourcesPageController;
use App\Http\Controllers\UseCaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/cari-nama-domain', 'find')->name('find');
    Route::get('persyaratan-layanan', 'terms')->name('terms');
    Route::get('persyaratan_layanan', function(Request $request) {
        $params = array_merge($request->query());
        return redirect()->route('terms', $params, 301);
    });
});

Route::controller(UseCaseController::class)->group(function() {
    Route::get('penerusan-domain', 'socialMedia')->name('social-media');
    Route::get('alamat-email-khusus', 'email')->name('email');
    Route::get('situs-web-profesional', 'websites')->name('websites');
});

Route::name('resources.')->group(function() {
    Route::controller(ResourcesPageController::class)->group(function() {
        Route::get('panduan-belajar', 'index')->name('index');
        Route::get('panduan-belajar/{slug}', 'show')->name('show');
        // Route::get('/panduan-belajar/toolbox', 'toolbox')->name('toolbox');

        Route::get('{second_route}/{slug}', 'handle_second_route')->name('handle_second_route');
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

// routes/web.php - temporary debug route
Route::get('debug-uri', function () {
    return [
        'REQUEST_URI'    => $_SERVER['REQUEST_URI']    ?? 'missing',
        'QUERY_STRING'   => $_SERVER['QUERY_STRING']   ?? 'missing',
        'HTTP_HOST'      => $_SERVER['HTTP_HOST']      ?? 'missing',
        'SERVER_NAME'    => $_SERVER['SERVER_NAME']    ?? 'missing',
        'SCRIPT_NAME'    => $_SERVER['SCRIPT_NAME']    ?? 'missing',
        'SCRIPT_FILENAME'=> $_SERVER['SCRIPT_FILENAME']?? 'missing',
        'PHP_SELF'       => $_SERVER['PHP_SELF']       ?? 'missing',
        'argv'           => $_SERVER['argv']           ?? 'missing',
        'request_all'    => request()->all(),
        'full_url'       => request()->fullUrl(),
        // Raw query string from PHP
        'raw_GET'        => $_GET,
    ];
});
