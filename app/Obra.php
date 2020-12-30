<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    //
    protected $fillable=['nombre','fechaobra', 'aforo', 'disponibles', 'sala'];
    protected $guarded = [];
    public $timestamps = false;
    protected $primaryKey = 'cod_obra';
    public function getRouteKeyName()
    {
        return 'cod_obra';
    }
}
