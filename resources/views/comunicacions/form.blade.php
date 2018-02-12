
{!!Form::open(['url' => $url, 'method' => $method])!!}



<div class="form-group col-md-6">
<label>Correo:</label>
    {{Form::text('correo',$comunicacion->correo,['class' => 'form-control', 'placeholder'=>'asd@asd.com','maxlength'=>'250'])}}
    
    @if($errors->has('correo'))
        <span style='color:red;'>{{$errors->first('correo')}}</span>
    @endif
    <br>
</div>



<div class="form-group col-md-6">
<label>Descripcion</label>
    {{Form::text('descripcion',$comunicacion->descripcion,['class' => 'form-control', 'placeholder'=>'descripcion','maxlength'=>'150'])}}
    
    @if($errors->has('descripcion'))
        <span style='color:red;'>{{$errors->first('descripcion')}}</span>
    @endif
    <br>
</div>



<div class="col-md-12 form-group text-right">
    <div class="form-group text-right">
        <a href="{{url('/comunicacions')}}">Regresar al listado de comunicaciones</a>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>
</div>

{!! Form::close() !!}