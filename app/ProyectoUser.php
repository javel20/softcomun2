<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProyectoUser extends Model
{
    protected $table = 'proyectos_users';

    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
