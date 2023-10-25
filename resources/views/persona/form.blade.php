<h2 style="margin-left:100px"> {{$modo}}  persona </h2>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
<ul>

@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
</div>


@endif
<div class="container-fluid">
<div class="row">
        <div class="col-sm-10" style="margin:auto">

<div class="form-group  ">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="nombre" value="{{ isset($persona->nombre)?$persona->nombre:old('nombre') }}"><br>

</div>

<div class="form-group ">
<label for="CorreoElectronico"> Correo Electronico </label>
<input type="text" class="form-control" name="CorreoElectronico" value="{{ isset($persona->CorreoElectronico)?$persona->CorreoElectronico:old('CorreoElectronico')}}"><br>
</div>

<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control" name="telefono" value="{{ isset($persona->telefono)?$persona->telefono:old('telefono')}}"><br>
</div>

<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" name="Direccion" value="{{isset($persona->Direccion)?$persona->Direccion:old('Direccion')}}"><br>
</div>

<input class="btn btn-success " type="submit" value="{{ $modo }} datos ">

<a class="btn btn-primary d-inline" href= "{{url('persona/')}}"> Regresar</a>

</div>
</div>
</div>