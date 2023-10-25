<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cita->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $cita->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
    <label for="fecha">Fecha:</label>
    <input type="date" class="form-control" id="fecha" name="fecha">
</div>


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">{{ __('Agendar') }}</button>
        <a class="btn btn-primary d-inline" href= "{{url('citas/')}}"> Regresar</a>
    </div>
</div>