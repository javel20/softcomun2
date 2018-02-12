@extends("layouts.app")

@section("content")

    <div class="big-padding text-center blue-grey white-text">
    <br>
<br>
        <h1>Trabajador</h1>
    <br>
    
    </div>

    @include('trabajadors.buscar')

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>DNI</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Direccion</td>
                    <td>Celular</td>
                    <td>Operador</td>
                    <td>Estado</td>
                    <td>Tipo Trabajador</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($trabajadors as $trabajador)
                <tr>
                    <td>{{$trabajador->dni}}</td>
                    <td>{{$trabajador->nombre}}</td>
                    <td>{{$trabajador->apellidopaterno}}</td>
                    <td>{{$trabajador->apellidomaterno}}</td>
                    <td>{{$trabajador->direccion}}</td>
                    <td>{{$trabajador->celular}}</td>
                    <td>{{$trabajador->operador}}</td>
                    <td>{{$trabajador->estado}}</td>
                    <td>{{$trabajador->tipotrabajador->nombre}}</td>

                    

                    

                    <td>
                        <a href="{{url('/trabajadors/'.$trabajador->id.'/edit')}}">Editar</a>
                        @include('trabajadors.delete',['trabajador' => $trabajador])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection