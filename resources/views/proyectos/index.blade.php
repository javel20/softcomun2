@extends("layouts.app")

@section("content")

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
                @foreach($proyectos as $proyecto)
                <tr>

                    <td>{{$proyecto->nombre}}</td>
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


@endsection