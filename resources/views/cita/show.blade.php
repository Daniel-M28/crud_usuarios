@extends('layouts.app')

@section('template_title')
    {{ $cita->name ?? "{{ __('Show') Cita" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin-left: 250px">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} cita</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('citas.index') }}"> {{ __('Regresar') }}</a>
                            
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cita->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $cita->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $cita->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
