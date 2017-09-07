<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ArticleRelationshipResource extends Resource
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
        return [
            'author'   => [
                'links' => [
                    'self'    => route('articles.relationships.author', ['article' => $this->id]),
                    'related' => route('articles.author', ['article' => $this->id]),
                ],
                'data'  => new AuthorIdentifierResource($this->author),
            ],
            'comments' => (new ArticleCommentsRelationshipResource($this->comments))->additional(['article' => $this]),
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
