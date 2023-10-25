@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? "{{ __('Show') Inventario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin-left: 250px">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver producto') }} </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventario.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $inventario->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $inventario->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Existencias:</strong>
                            {{ $inventario->existencias }}
                        </div>
                        <div class="form-group">
                            <strong>Entradas:</strong>
                            {{ $inventario->entradas }}
                        </div>
                        <div class="form-group">
                            <strong>Salidas:</strong>
                            {{ $inventario->salidas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
