@extends('app')

@section('title', 'Resources')

@section('content')
    <div>
        <div class="py-10">
            <div class="mx-auto mt-5 container">
                <h1 class="page-title">Resources</h1>
                @dump(articleViews())
                <ul>
                    @foreach ($posts as $post)
                        <li>
                            <a href="{{ route('resources.show', $post->slug) }}">{{ $post->title }}</a>
                            <small>({{ $post->read_time }})</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
