@extends("layouts.app")

@section("content")
@include('layouts.menu2')

    <div class="container col-sm-8 col-md-8">
    <br>
<br><br>
        <h1>Nueva Tarea</h1>

            @include('tareas.form',['tarea'=>$tarea, 'url' => '/tareas', 'method' => 'POST'])    
    
    </div>

@endsection