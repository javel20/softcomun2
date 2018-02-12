@extends("layouts.app")

@section("content")

    <div class="container col-sm-8 col-md-8">
    <br>
<br><br>
        <h1>Nuevo Proyecto</h1>

            @include('proyectos.form',['proyecto'=>$proyecto, 'url' => '/proyectos', 'method' => 'POST'])    
    
    </div>

@endsection