<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //   
    protected $guarded = [];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'numero_venta';
    }
}
