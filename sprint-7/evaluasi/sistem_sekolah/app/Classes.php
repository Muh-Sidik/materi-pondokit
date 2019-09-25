<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $fillable = [
        'name_class',
    ];

    public function item()
    {
        return $this->hasMany(\App\Item::class, 'class_id');
    }

    public function subclass()
    {
        return $this->hasMany(\App\Subclass::class, 'name_class_id');
    }
}
