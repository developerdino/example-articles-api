<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Resources\CommentsRelationshipResource;
use App\Http\Resources\PeopleResource;

class ArticleRelationshipController extends Controller
{
    public function author(Article $article)
    {
        return new PeopleResource($article->author);
    }

    public function comments(Article $article)
    {
        return new CommentsRelationshipResource($article->comments);
    }
}
