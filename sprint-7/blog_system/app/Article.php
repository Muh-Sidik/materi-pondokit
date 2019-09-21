<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(\App\Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
