<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name_category'
    ];

    public function article()
    {
        return $this->hasMany(\App\Article::class);
    }
}
