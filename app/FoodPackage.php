<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodPackage extends Model
{
    public function images()
    {
        return $this->hasMany('App\PackageImage');
    }
    //
}
