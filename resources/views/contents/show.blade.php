@extends('layouts.app')

@section('title', $post->title)

@section('meta_title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('meta_keywords', $post->meta_keywords)

@section('content')

    <div class="py-10">
        <h1 class="text-center page-title">{{ $post->title }}</h1>
    </div>

    <article>
        {{-- View Path --}}
        @include($view_path)
    </article>

@endsection
