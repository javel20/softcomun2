<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = [
        'nombre', 'propietario', 'ubicacion', 'descripcion',
    ];


    
    public function users()
    {
        return $this->belongsToMany(User::class,'proyectos_users');
    } 

    public function comunicacion()
    {
        return $this->hasMany(Comunicacion::class);
    }

    public function tarea()
    {
        return $this->hasMany(Tarea::class);
    } 

    public function foto()
    {
        return $this->hasMany(Foto::class);
    } 

    public function docplanos()
    {
        return $this->hasMany(DocPlanos::class);
    } 

    /* 
    public function scopeProyectos($query, $dato)
    {
        return $query->join('tipotrabajadors', 'trabajadors.tipotrabajador_id', '=' ,'tipotrabajadors.id')
                    ->where('trabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidopaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.apellidomaterno','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.dni','LIKE', "%$dato->buscar%")
                    ->orWhere('trabajadors.estado','LIKE', "%$dato->buscar%")
                    ->orWhere('tipotrabajadors.nombre','LIKE', "%$dato->buscar%")
                    ->select('trabajadors.*', 'tipotrabajadors.nombre as nombrett')
                    ->paginate(7);
    }*/

}

