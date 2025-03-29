<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Article;

final class ArticleController
{
    /**
     * Returns a view with all articles.
     */
    public function index(): int
    {
        return view('articles.list', [
            'articles' => Article::all(),
        ]);
    }

    public function publish(Article $article): View
    {
        $article->publish();

        return view('articles.show', [
            'article' => $article,
        ]);
    }
}
