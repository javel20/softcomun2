<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Proyecto;
use App\Role;

class ProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::All();
        // dd($proyectos);
        return view("proyectos.index")->with([
             'proyectos' => $proyectos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyecto = new Proyecto;
        $roles = Role::pluck('display_name','id');
        return view("proyectos.create")->with([
            'proyecto' => $proyecto
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
        $proyecto = new Proyecto;

        $proyecto->nombre = $request->nombre;
        $proyecto->propietario = $request->propietario;
        $proyecto->ubicacion = $request->ubicacion;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->user_id = Auth()->user()->id;
        $request->users = Auth()->user()->id;
        //dd($proyecto->users());
       
        
        if($proyecto->save()){
            $proyecto->users()->attach($request->users);
            return redirect("/proyectos");
        }else{
            return view("/proyectos.create",["proyecto" => $proyecto]);
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
        $proyecto = Proyecto::find($id);
        return view("proyectos.show")->with([
            'proyecto' =>$proyecto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view("proyectos.edit")->with([
            'proyecto' =>$proyecto
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
        $proyecto = Proyecto::find($id);

        $proyecto->nombre = $request->nombre;
        $proyecto->propietario = $request->propietario;
        $proyecto->ubicacion = $request->ubicacion;
        $proyecto->descripcion = $request->descripcion;
        $request->users = Auth()->user()->id;

        if($proyecto->save()){
            //$proyecto->users()->sync($request->users);
            return redirect("/proyectos");
        }else{
            return view("/proyectos.create",["proyecto" => $proyecto]);
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
        Proyecto::Destroy($id);
        return redirect('/proyectos');
    }

    public function indexporlogin()
    {
        $proyectoss = Proyecto::where('user_id',Auth()->user()->id)->get();
        //dd(Auth()->user()->id);
        return view("proyectos.indexporlogin")->with([
             'proyectoss' => $proyectoss
        ]);
    }
}
