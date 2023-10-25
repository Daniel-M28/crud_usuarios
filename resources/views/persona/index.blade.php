@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<div class="container-fluid">
        <div class="row">
        <div class="col-sm-10" style="margin:auto">
            <span id="card_title "  >
                                {{ __('Usuarios') }}

                            </span>

                           
             


          <div class="card">
              <div class="card-header"><a href= "{{url('persona/create')}}" class="btn btn-success"  >Registrar nuevo usuario </a> <br></div>
               <div style="display: flex; justify-content: space-between; align-items: center;">

<div class="card-body">
    
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>Correo Electonico</th>
            <th>telefono</th>
            <th>Direccion</th>
            <th>Acciones</th>
             
        </tr>
    </thead>


    <tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{$persona-> id}}</td>
            <td>{{$persona-> nombre}}</td>
            <td>{{$persona-> CorreoElectronico}}</td>
            <td>{{$persona-> telefono}}</td>
            <td>{{$persona-> Direccion}}</td>
            <td> 

            
             <a href=" {{url('/persona/'.$persona ->id.'/edit') }}" class="btn btn-warning">
            Editar </a>
            | 
                <form action="{{url('/persona/'.$persona ->id) }}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                  <input class="btn btn-danger" type="submit" onclick="return confirm ('¿deseas borrar?')"  value="borrar">

                </form>
            
            <td>
        </tr>
        @endforeach
    </tbody>

{!!$personas->links() !!}
</div>
</div>
</div>
</div>
@endsection


