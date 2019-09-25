<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name_item', 'code_item', 'user_id', 'class_id', 'type',
    ];

    public function class()
    {
        return $this->belongsTo(\App\Classes::class, 'class_id');
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class, 'user_id');
    }
}
