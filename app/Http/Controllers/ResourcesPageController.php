<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ResourcesPageController extends Controller
{
    function index()
    {
        $posts = Post::where('status', 'published')
            ->with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('contents.index', compact('posts'));
    }

    function show(Request $request, string $slug) {
        $post = Post::where('slug', $slug)->with('category')->first();

        if (!$post || $post->status !== 'published') {
            abort(404);
        }

        $view_path = 'contents.articles.dynamic.' . $post->slug;
        if (!view()->exists($view_path)) {
            $view_path = 'contents.articles.default';
        }

        return view('contents.show', compact('post', 'view_path'));
    }
}
