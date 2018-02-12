<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comunicacion extends Model
{
    protected $fillable = [
        'correo', 'descripcion', 'proyecto_id',
    ];


    
    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    } 
}
