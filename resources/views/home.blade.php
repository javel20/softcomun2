@extends('layouts.app')

@if(!(Auth::guest()) && (Auth::user()->role_id == 1))


@section('content')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if(!(Auth::guest()) && (Auth::user()->role_id == 2))

@section('content')

<div class="big-padding text-center blue-grey white-text">
<br>
<br>
    <h1>Proyectos</h1>
<br>

</div>

@include('proyectos.buscar')

<div class="table-responsive">

    <table class="table table-bordered">
        <thead>
            <tr>

                <td>Nombre</td>
                <td>Propietario</td>
                <td>Ubicacion</td>
                <td>Descripcion</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @foreach($proyectoss as $proyecto)
            <tr>

                <td>
                    <a href="{{ route('proyectos.show',$proyecto->id) }}">{{$proyecto->nombre}}</a>
                    </td>
                <td>{{$proyecto->propietario}}</td>
                <td>{{$proyecto->ubicacion}}</td>
                <td>{{$proyecto->descripcion}}</td>
            
                <td>
                    <a href="{{url('/proyectos/'.$proyecto->id.'/edit')}}">Editar</a>
                    @include('proyectos.delete',['proyecto' => $proyecto])
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>
</div>
@endif


@endsection