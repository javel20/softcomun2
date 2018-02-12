<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Proyecto;
use App\Comunicacion;
use App\ProyectoUser;

class ComunicacionsController extends Controller
{
    public function index()
    {
        $comunicacions = Comunicacion::All();
        // dd($comunicacions);
        return view("comunicacions.index")->with([
             'comunicacions' => $comunicacions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comunicacion = new Comunicacion;
        $proyectos = Proyecto::all();
        //$roles = Role::pluck('display_name','id');
        return view("comunicacions.create")->with([
            'comunicacion' => $comunicacion,
            'proyectos' => $proyectos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comunicacion = new Comunicacion;

        $comunicacion->correo = $request->correo;

        $comunicacion->descripcion = $request->descripcion;

        $proyectos = ProyectoUser::all();
        //if($proyecto->id=1)
        foreach($proyectos as $proyecto) 

            if($proyecto->user_id=Auth()->user()){
                $idproyecto=$proyecto->proyecto_id;
                //dd($idproyecto);
            }

        $comunicacion->proyecto_id = $idproyecto;
       
        
        if($comunicacion->save()){
            return redirect("/comunicacions");
        }else{
            return view("/comunicacions.create",["comunicacion" => $comunicacion]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comunicacion = Comunicacion::find($id);
        return view("comunicacions.edit")->with([
            'comunicacion' =>$comunicacion
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comunicacion = Comunicacion::find($id);

        $comunicacion->correo = $request->correo;

        $comunicacion->descripcion = $request->descripcion;
        

        if($comunicacion->save()){
            //$comunicacion->users()->sync($request->users);
            return redirect("/comunicacions");
        }else{
            return view("/comunicacions.create",["comunicacion" => $comunicacion]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comunicacion::Destroy($id);
        return redirect('/comunicacions');
    }
}
