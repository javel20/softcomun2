@extends("layouts.app")

@section("content")

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Proyecto</h1>

            @include('proyectos.form',['proyecto'=>$proyecto, 'url' => '/proyectos/'.$proyecto->id, 'method' => 'PATCH'])

    </div>

@endsection