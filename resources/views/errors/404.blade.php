@extends('app')

@section('content')

<main class="flex flex-col justify-center gap-6 py-20 min-h-186 container">
    <div class="flex flex-col gap-2.5 text-deep-blue-300 text-center">
        <h1 class="subheadline-1">404 ERROR</h1>
        <h3 class="subheadline-3">Sorry! The page you were looking for cannot be found!</h3>
    </div>
    <div class="flex justify-center">
        <a href="{{ route('index') }}" class="w-full max-w-60 font-bold btn-secondary">Back to Home</a>
    </div>
</main>

@endsection
