<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocPlanos extends Model
{
    protected $fillable = [
        'nombre', 'fecha', 'user_id', 'proyecto_id',
    ];


    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }
    
}
