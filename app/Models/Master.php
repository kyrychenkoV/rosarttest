<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Master extends Model
{
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }

    static function getMastersItem()
    {
        return self::all();
    }

}
