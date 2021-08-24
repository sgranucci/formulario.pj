<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrigenFondo extends Model
{
    protected $table = 'origen_fondos';
    
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
