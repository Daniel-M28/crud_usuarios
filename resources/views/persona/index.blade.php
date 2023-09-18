@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif

<a href= "{{url('persona/create')}}" class="btn btn-success"  >Registrar nuevo usuario </a> <br> <br>


<table class="table table-light">
    <thead class="thead-light">
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
</table>
{!!$personas->links() !!}
</div>
@endsection