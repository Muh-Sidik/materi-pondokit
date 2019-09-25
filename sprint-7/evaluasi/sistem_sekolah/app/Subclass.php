<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subclass extends Model
{
    protected $fillable = [
        'name_subclass', 'name_class_id',
    ];

    public function class()
    {
        return $this->belongsTo(\App\Classes::class, 'name_class_id');
    }
}
