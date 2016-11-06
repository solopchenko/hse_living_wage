<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';

    protected $fillable = ['name'];

    public $timestamps = false;


    public function products_in_region() //продовольственная корзина
    {
        return $this->hasMany('App\ProductRegion', 'region_id', 'id');
    }

    public function measures() //продовольственная корзина
    {
        return $this->hasMany('App\Measure', 'region_id', 'id');
    }
}
