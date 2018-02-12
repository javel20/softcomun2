@extends("layouts.app")

@section("content")
@include('layouts.menu2')

    <div class="big-padding text-center blue-grey white-text">
    <br>
<br>
        <h1>Comunicaciones</h1>
    <br>
    
    </div>

    @include('comunicacions.buscar')

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>Correo</td>

                    <td>Descripcion</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($comunicacions as $comunicacion)
                <tr>

                    <td>{{$comunicacion->correo}}</td>

                    <td>{{$comunicacion->descripcion}}</td>
                

                    <td>
                        <a href="{{url('/comunicacions/'.$comunicacion->id.'/edit')}}">Editar</a>
                        @include('comunicacions.delete',['comunicacion' => $comunicacion])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection