<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MeasureHistory extends Model
{
    protected $table = 'measures_history';

    protected $fillable = ['products_regions_id', 'amount', 'price', 'total', 'measure_id'];

    public $timestamps = false;

    public function measure()
    {
        return $this->belongsTo('App\Measure', 'measure_id', 'id');
    }

    public function products_regions()
    {
        return $this->belongsTo('App\ProductRegion', 'products_regions_id', 'id');
    }
}
