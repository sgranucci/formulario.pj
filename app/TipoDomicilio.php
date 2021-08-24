<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDomicilio extends Model
{
   
    protected $table = 'tipo_domicilios';

    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];
}
