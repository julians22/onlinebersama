@extends('app')

@section('content')

<main data-analytics-level1="body" class="flex flex-col justify-center gap-6 py-20 container min-h-96.75 md:min-h-186">
    <div class="flex flex-col gap-2.5 text-deep-blue-300 text-center">
        <h1 class="subheadline-1">404 ERROR</h1>
        <h3 class="subheadline-4 font-semibold! md:subheadline-3">Maaf, halaman yang Anda cari tidak ditemukan!</h3>
    </div>
    <div class="flex justify-center">
        <a
            data-analytics-name="button Back to Home"
            href="{{ route('index') }}"
            class="w-full max-w-61.75 font-bold btn-secondary py-4 text-[18px]!">
            Kembali ke Beranda
        </a>
    </div>
</main>

@endsection
