<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EbookDownloader extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ?string $ebookUrl = null)
    {
        $defaultEbookUrl = config('onlinebersama.default_ebook');

        // Use the provided ebook URL or fallback to the default
        $finalEbookUrl = $ebookUrl ?? $defaultEbookUrl;

        $filename = basename($finalEbookUrl);

        // 1. Request dengan User-Agent agar tidak diblokir oleh CloudFront
        $response = Http::withHeaders([
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3'
        ])->get($finalEbookUrl);

        // 2. Cek apakah request sukses (HTTP 200). Jika gagal, lemparkan error.
        if ($response->failed()) {
            abort(404, 'Ebook not found or cannot be downloaded.');
        }

        // 3. Jika sukses, stream response body ke browser user
        return response($response->body(), 200)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="' . $filename . '"');
    }
}
