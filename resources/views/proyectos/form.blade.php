
{!!Form::open(['url' => $url, 'method' => $method])!!}



            <div class="form-group col-md-6">
            <label>Nombre:</label>
                {{Form::text('nombre',$proyecto->nombre,['class' => 'form-control', 'placeholder'=>'nombres','maxlength'=>'250'])}}
                
                @if($errors->has('nombre'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Propietario</label>
                {{Form::text('propietario',$proyecto->propietario,['class' => 'form-control', 'placeholder'=>'propietario','maxlength'=>'150'])}}
                
                @if($errors->has('propietario'))
                    <span style='color:red;'>{{$errors->first('nombre')}}</span>
                @endif
                <br>
            </div>


            <div class="form-group col-md-6">
            <label>Ubicacion</label>
                {{Form::text('ubicacion',$proyecto->ubicacion,['class' => 'form-control', 'placeholder'=>'ubicacion','maxlength'=>'150'])}}
                
                @if($errors->has('ubicacion'))
                    <span style='color:red;'>{{$errors->first('ubicacion')}}</span>
                @endif
                <br>
            </div>

            <div class="form-group col-md-6">
            <label>Descripcion</label>
                {{Form::text('descripcion',$proyecto->descripcion,['class' => 'form-control', 'placeholder'=>'descripcion','maxlength'=>'150'])}}
                
                @if($errors->has('descripcion'))
                    <span style='color:red;'>{{$errors->first('descripcion')}}</span>
                @endif
                <br>
            </div>

           


            

            <div class="col-md-12 form-group text-right">
                <div class="form-group text-right">
                    <a href="{{url('/proyectos')}}">Regresar al listado de proyectoes</a>
                    <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </div>

        {!! Form::close() !!}