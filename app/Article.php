<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author()
    {
        return $this->belongsTo(People::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
