<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CommentsRelationshipResource extends Resource
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
                'data'  => new AuthorResourceIdentifier($this->author),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('comments.index'),
            ],
        ];
    }
}
