<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    
    protected $table = 'generos';

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
