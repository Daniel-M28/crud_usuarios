@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? "{{ __('Show') Usuario" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin-left: 250px">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuario.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronico:</strong>
                            {{ $usuario->CorreoElectronico }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $usuario->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $usuario->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

       
    </section>
@endsection
