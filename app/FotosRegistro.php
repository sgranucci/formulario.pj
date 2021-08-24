<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotosRegistro extends Model
{
    protected $table = 'fotos_registro';
    
    protected $fillable = [
        'name', 'registro_id', 'index'
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
