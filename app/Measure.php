<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Measure extends Model
{
    protected $table = 'measures';

    protected $fillable = ['date', 'total', 'user_name', 'region_id'];

    public $timestamps = false;

    public function region()
    {
        return $this->belongsTo('App\Region', 'region_id', 'id');
    }
    public function measure_history() //продовольственная корзина
    {
        return $this->hasMany('App\MeasureHistory', 'measure_id', 'id');
    }
}
