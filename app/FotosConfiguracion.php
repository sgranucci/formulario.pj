<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotosConfiguracion extends Model
{
    protected $table = 'fotos_configuracion';
    
    protected $fillable = [
        'name', 'active'
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
