<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ArticleCommentsRelationshipResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        $article = $this->additional['article'];

        return [
            'data'  => CommentIdentifierResource::collection($this->collection),
            'links' => [
                'self'    => route('articles.relationships.comments', ['article' => $article->id]),
                'related' => route('articles.comments', ['article' => $article->id]),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('articles.index'),
            ],
        ];
    }
}
