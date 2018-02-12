@extends("layouts.app")

@section("content")

    <div class="container col-sm-8 col-md-8">
    <br>
<br><br>
        <h1>Nuevo Trabajador</h1>

            @include('trabajadors.form',['trabajador'=>$trabajador, 'url' => '/trabajadors', 'method' => 'POST'])    
    
    </div>

@endsection