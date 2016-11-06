<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'unit', 'product_type_id'];

    public $timestamps = false;

    public function product_type()
    {
        return $this->belongsTo('App\ProductType', 'product_type_id', 'id');
    }

    public function product_in_regions() //продукт в регионах
    {
        return $this->hasMany('App\ProductRegion', 'product_id', 'id');
    }

}
