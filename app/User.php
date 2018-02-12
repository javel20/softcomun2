<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /* public function accesos()
    {
        return $this->belongsToMany('Softcomun\Acceso');
    } */

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class);
    } 

    public function proyectoUser()
    {
        return $this->hasMany(ProyectoUser::class);
    }


    /* public function scopeUsers($query)
    {
        return $query->select('users.*')
                    ->get();

    } */
}
