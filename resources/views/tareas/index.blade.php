@extends("layouts.app")

@section("content")
@include('layouts.menu2')

    <div class="big-padding text-center blue-grey white-text">
    <br>
<br>
        <h1>Tareas</h1>
    <br>
    
    </div>

    @include('tareas.buscar')

    <div class="table-responsive">

        <table class="table table-bordered">
            <thead>
                <tr>

                    <td>Nombre</td>
                    <td>Responsable</td>
                    <td>Avance</td>
                    <td>Fecha Inicio</td>
                    <td>Fecha Final</td>
                    <td>Estado</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach($tareas as $tarea)
                <tr>

                    <td>{{$tarea->nombre}}</td>

                    @foreach($users as $user)
                        @if($user->id == $tarea->user_id)
                        <td>{{$user->name}}</td>
                        @endif
                    @endforeach
                    
                    <td>{{$tarea->avance}}</td>
                    <td>{{$tarea->fechai}}</td>
                    <td>{{$tarea->fechaf}}</td>
                    <td>{{$tarea->estado}}</td>
                

                    <td>
                        <a href="{{url('/tareas/'.$tarea->id.'/edit')}}">Editar</a>
                        @include('tareas.delete',['tarea' => $tarea])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>


@endsection