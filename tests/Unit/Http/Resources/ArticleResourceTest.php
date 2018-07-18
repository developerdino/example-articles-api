<?php

namespace Tests\Unit;

use App\Article;
use App\Http\Resources\ArticleResource;
use Tests\TestCase;

class ArticleResourceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testToArray()
    {
        $article = factory(Article::class)->make([
            'author_id' => 1
        ]);

        $resource = new ArticleResource($article);

        $representation = $resource->toArray(null);

        $this->assertEquals($article->title, $representation['attributes']['title']);
        $this->assertEquals($article->id, $representation['id']);
        $this->assertEquals('articles', $representation['type']);
    }
}
