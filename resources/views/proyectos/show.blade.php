@extends("layouts.app")
@section("content")
@include('layouts.menu2')

    <div class="container col-sm-9 col-md-9">
    
        <h1>Proyecto {{ $proyecto->nombre }}</h1>

            <table class="table">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $proyecto->nombre }}</td>
                </tr>

                <tr>
                    <th>Propietario:</th>
                    <td>{{ $proyecto->propietario }}</td>
                </tr>

                <tr>
                    <th>Ubicacion:</th>
                    <td>{{ $proyecto->ubicacion }}</td>
                </tr>

                <tr>
                    <th>Descripcion:</th>
                    <td>{{ $proyecto->descripcion }}</td>
                </tr>
            </table>

    </div>

@endsection