@extends("layouts.app")

@section("content")
@include('layouts.menu2')

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Tarea</h1>

            @include('tareas.form',['tarea'=>$tarea, 'url' => '/tareas/'.$tarea->id, 'method' => 'PATCH'])

    </div>

@endsection