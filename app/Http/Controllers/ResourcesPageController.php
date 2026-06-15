<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;

class ResourcesPageController extends Controller
{
    public function index()
    {
        $topics = Topic::all();

        return view('contents.index', compact('topics'));
    }

    public function handle_second_route(string $second_route, string $slug)
    {
        $availableSecondRoutes = [
            'default' => 'panduan-belajar',
            'social-media-detail' => 'penerusan-domain',
            'email-detail' => 'alamat-email-khusus',
            'websites-detail' => 'situs-web-profesional'
        ];

        $routeVals = array_flip($availableSecondRoutes);

        if (!in_array($second_route, $availableSecondRoutes)) {
            abort(404);
        }

        $post = Post::published()
            ->where('slug', $slug)
            ->where('url_name', $routeVals[$second_route] ?? null)
            ->first();

        if (!$post) {
            abort(404);
        }

        if (!$post) abort(404);

        $view_path = 'contents.articles.dynamic.' . $post->template_view_path;
        if (!view()->exists($view_path)) {
            $view_path = 'contents.articles.default';
        }

        return view('contents.show', [
            'post' => $post,
            'other_posts' => $post->relatedArticles,
            'view_path' => $view_path
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::published()
            ->where('slug', $slug)
            ->with('topics', 'relatedArticles', 'relatedOneArticle')
            ->first();

        if (!$post) abort(404);

        $view_path = 'contents.articles.dynamic.' . $post->template_view_path;
        if (!view()->exists($view_path)) {
            $view_path = 'contents.articles.default';
        }

        return view('contents.show', [
            'post' => $post,
            'other_posts' => $post->relatedArticles,
            'view_path' => $view_path
        ]);
    }

    public function toolbox()
    {
        return view('contents.toolbox');
    }
}
