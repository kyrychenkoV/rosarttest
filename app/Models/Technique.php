<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    static function getTechniquesItem()
    {
        return self::all();
    }
}
