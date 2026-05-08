@extends('app')

@section('title', $post->meta_title ?? $post->title)

@section('meta_title', $post->meta_title ?? $post->title)
@section('meta_description', $post->meta_description ?? $post->title)
@section('meta_keywords', $post->meta_keywords ?? $post->title)

@section('content')

<main>
    @if ($post->isCustomTemplate())
        @include($view_path)
    @else
        @include('contents.articles.default')
    @endif
</main>

@endsection
