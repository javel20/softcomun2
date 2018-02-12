@extends("layouts.app")

@section("content")
@include('layouts.menu2')

    <div class="container col-sm-9 col-md-9">
    
        <h1>Editar Comunicacion</h1>

            @include('comunicacions.form',['comunicacion'=>$comunicacion, 'url' => '/comunicacions/'.$comunicacion->id, 'method' => 'PATCH'])

    </div>

@endsection