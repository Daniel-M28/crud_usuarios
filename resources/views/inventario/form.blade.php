<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('codigo') }}
            {{ Form::text('codigo', $inventario->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">El Codigo es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('producto') }}
            {{ Form::text('producto', $inventario->producto, ['class' => 'form-control' . ($errors->has('producto') ? ' is-invalid' : ''), 'placeholder' => 'Producto']) }}
            {!! $errors->first('producto', '<div class="invalid-feedback">El Producto es requerido</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('existencias') }}
            {{ Form::text('existencias', $inventario->existencias, ['class' => 'form-control' . ($errors->has('existencias') ? ' is-invalid' : ''), 'placeholder' => 'Existencias']) }}
            {!! $errors->first('existencias', '<div class="invalid-feedback">Las Existencias son requeridas</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('entradas') }}
            {{ Form::text('entradas', $inventario->entradas, ['class' => 'form-control' . ($errors->has('entradas') ? ' is-invalid' : ''), 'placeholder' => 'Entradas']) }}
            {!! $errors->first('entradas', '<div class="invalid-feedback">Las Entradas son requeridas</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salidas') }}
            {{ Form::text('salidas', $inventario->salidas, ['class' => 'form-control' . ($errors->has('salidas') ? ' is-invalid' : ''), 'placeholder' => 'Salidas']) }}
            {!! $errors->first('salidas', '<div class="invalid-feedback">Las Salidas son requeridas</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">{{ __('Registrar') }}</button>
        <a class="btn btn-primary d-inline" href= "{{url('inventario/')}}"> Regresar</a>
    </div>
</div>