<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilios';
    
    protected $fillable = [
        'tipodomicilio_id','pais_id','provincia_id','localidad_id','cp','calle','pisodto','user_id'
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function pais()
    {
        return $this->belongsTo('App\Pais');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }
    
    public function localidad()
    {
        return $this->belongsTo('App\Localidad');
    }
    
    public function tipodomicilio()
    {
        return $this->belongsTo('App\TipoDomicilio');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
