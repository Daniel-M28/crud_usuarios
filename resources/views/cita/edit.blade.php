@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Cita
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-sm-8" style="margin-left: 250px">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Cita</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('citas.update', $cita->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cita.form')
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
