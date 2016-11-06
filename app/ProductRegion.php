<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRegion extends Model
{
    protected $table = 'products_regions';

    protected $fillable = ['region_id', 'product_id', 'amount', 'price'];

    public $timestamps = false;

    /*
    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }
    public function measure_history()
    {
        return $this->hasMany('App\MeasureHistory', 'products_regions_id', 'id');
    }
    */
}
