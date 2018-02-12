<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    public function user()
    {
        return $this->belongsToMany('Softcomun\User');
    }
}
