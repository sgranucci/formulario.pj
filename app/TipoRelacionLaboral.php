<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRelacionLaboral extends Model
{
    
    protected $table = 'tipo_relacion_laborales';

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
