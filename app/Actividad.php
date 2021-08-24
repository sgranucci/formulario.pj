<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    
    protected $table = 'actividades';

    protected $fillable = [
        'name',
        'codigo',
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
