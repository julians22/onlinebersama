<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ResourcesPageController extends Controller
{
    public function index()
    {
        return view('contents.index');
    }

    public function show(Request $request, string $slug) {
        $post = Post::where('slug', $slug)->with('category')->first();

        if (!$post || $post->status !== 'published') {
            abort(404);
        }

        $view_path = 'contents.articles.dynamic.' . $post->slug;
        if (!view()->exists($view_path)) {
            $view_path = 'contents.articles.default';
        }

        return view('contents.show', [
            'post' => $post,
            'view_path' => $view_path,
        ]);
    }

    public function toolbox()
    {
        return view('contents.toolbox');
    }
}
