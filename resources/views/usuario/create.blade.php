@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin-left: 250px">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Registrar') }} usuario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuario.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
