<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Proyecto;
use App\Tarea;
use App\User;
use App\ProyectoUser;

class TareasController extends Controller
{
    public function index()
    {
        $tareas = Tarea::All();
        $users = User::All();
        // dd($tareas);
        return view("tareas.index")->with([
             'tareas' => $tareas,
             'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea;
        //$roles = Role::pluck('display_name','id');
        return view("tareas.create")->with([
            'tarea' => $tarea
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
        $tarea = (new Tarea)->fill($request->all());
        $tarea->user_id = Auth()->user()->id;
        $proyectos = ProyectoUser::all();
        //if($proyecto->id=1)
        foreach($proyectos as $proyecto) 

            if($proyecto->user_id=Auth()->user()){
                $idproyecto=$proyecto->proyecto_id;
                //dd($idproyecto);
            }

        $tarea->proyecto_id = $idproyecto;
       
        
        if($tarea->save()){
            return redirect("/tareas");
        }else{
            return view("/tareas.create",["tarea" => $tarea]);
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
        $tarea = Tarea::find($id);
        return view("tareas.edit")->with([
            'tarea' =>$tarea
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
        $tarea = Tarea::find($id);

        $tarea->nombre = $request->nombre;
        $tarea->user_id = Auth()->user()->id;
        $tarea->avance = $request->avance;
        $tarea->fechai = $request->fechai;
        $tarea->fechaf = $request->fechaf;
        $tarea->estado = $request->estado;
        

        if($tarea->save()){
            //$tarea->users()->sync($request->users);
            return redirect("/tareas");
        }else{
            return view("/tareas.create",["tarea" => $tarea]);
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
        Tarea::Destroy($id);
        return redirect('/tareas');
    }
}
