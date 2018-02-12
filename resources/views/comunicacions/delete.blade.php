{!! Form::open(['url' => '/comunicacions/'.$comunicacion->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}

    <input type="submit" class="btn btn-link red-text no-padding no-margin" value="Eliminar comunicacion">

{!! Form::close() !!}