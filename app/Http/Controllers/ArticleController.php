<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\ArticlesResource;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ArticlesResource
     */
    public function index()
    {
        return new ArticlesResource(Article::with(['author', 'comments.author'])->paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article $article
     *
     * @return ArticleResource
     */
    public function show(Article $article)
    {
        ArticleResource::withoutWrapping();

        return new ArticleResource($article);
    }
}
