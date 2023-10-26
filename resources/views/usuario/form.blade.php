<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">El Nombre es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CorreoElectronico') }}
            {{ Form::text('CorreoElectronico', $usuario->CorreoElectronico, ['class' => 'form-control' . ($errors->has('CorreoElectronico') ? ' is-invalid' : ''), 'placeholder' => 'Correoelectronico']) }}
            {!! $errors->first('CorreoElectronico', '<div class="invalid-feedback">El Correo Electronico es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $usuario->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">El Telefono es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $usuario->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">La Direccion es requerida</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">{{ __('Registrar') }}</button>
        <a class="btn btn-primary d-inline" href= "{{url('usuario/')}}"> Regresar</a>
    </div>
</div>