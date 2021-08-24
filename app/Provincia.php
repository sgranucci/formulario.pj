<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';
    
    protected $fillable = [
        'name','pais_id',
    ];

    protected $casts = [
        'id' => 'integer',
    ];



}
