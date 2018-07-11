<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    /**
     * People has many Articles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
