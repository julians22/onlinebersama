<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class ResourcesPageController extends Controller
{
    public function index()
    {
        $topics = Topic::all();

        return view('contents.index', compact('topics'));
    }

    public function show(Request $request, string $slug) {

        $post = Post::published()
            ->where('slug', $slug)
            ->with('topics', 'relatedArticles', 'relatedOneArticle')
            ->first();
        $other_posts = $post->relatedArticles;

        if (!$post || $post->status !== 'published') {
            abort(404);
        }

        $view_path = 'contents.articles.dynamic.' . $post->slug;
        if (!view()->exists($view_path)) {
            $view_path = 'contents.articles.default';
        }

        $check_image_exists = file_exists(public_path('images/articles/' . $post->slug . '.jpg'));
        if (!$check_image_exists) {
            $image = 'images/articles/default-image.jpg';
        } else {
            $image = 'images/articles/' . $post->slug . '.jpg';
        }

        return view('contents.show', [
            'post' => $post,
            'other_posts' => $other_posts,
            'view_path' => $view_path,
            'image' => $image
        ]);
    }

    public function toolbox()
    {
        return view('contents.toolbox');
    }
}
