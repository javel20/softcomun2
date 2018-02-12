
{!!Form::open(['url' => $url, 'method' => $method])!!}



<div class="form-group col-md-6">
<label>Nombre:</label>
    {{Form::text('nombre',$tarea->nombre,['class' => 'form-control', 'placeholder'=>'Nombre','maxlength'=>'250'])}}
    
    @if($errors->has('nombre'))
        <span style='color:red;'>{{$errors->first('nombre')}}</span>
    @endif
    <br>
</div>



<div class="form-group col-md-6">
<label>Avance(porcentaje)</label>
    {{Form::text('avance',$tarea->avance,['class' => 'form-control', 'placeholder'=>'%','maxlength'=>'150'])}}
    
    @if($errors->has('avance'))
        <span style='color:red;'>{{$errors->first('avance')}}</span>
    @endif
    <br>
</div>


<div class="form-group col-md-6">
<label>Fecha inicio</label>
    {{Form::date('fechai',$tarea->fechai,['class' => 'form-control', 'placeholder'=>'fechai','maxlength'=>'150'])}}
    
    @if($errors->has('fechai'))
        <span style='color:red;'>{{$errors->first('fechai')}}</span>
    @endif
    <br>
</div>



<div class="form-group col-md-6">
<label>Fecha final</label>
    {{Form::date('fechaf',$tarea->fechaf,['class' => 'form-control', 'placeholder'=>'fechaf','maxlength'=>'150'])}}
    
    @if($errors->has('fechaf'))
        <span style='color:red;'>{{$errors->first('fechaf')}}</span>
    @endif
    <br>
</div>


<div class="form-group col-md-6">
<label>Estado</label>
    {{Form::text('estado',$tarea->estado,['class' => 'form-control', 'placeholder'=>'estado','maxlength'=>'150'])}}
    
    @if($errors->has('estado'))
        <span style='color:red;'>{{$errors->first('estado')}}</span>
    @endif
    <br>
</div>





<div class="col-md-12 form-group text-right">
    <div class="form-group text-right">
        <a href="{{url('/tareas')}}">Regresar al listado de tareas</a>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>
</div>

{!! Form::close() !!}