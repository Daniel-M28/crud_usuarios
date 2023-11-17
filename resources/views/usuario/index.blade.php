@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin:auto">

            
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                           

                             <div class="float-right">
                                <a href="{{ route('usuario.create') }}" class="btn btn-success  float-right"  data-placement="left">
                                  {{ __('Registrar usuario') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Correoelectronico</th>
										<th>Telefono</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuario->Nombre }}</td>
											<td>{{ $usuario->CorreoElectronico }}</td>
											<td>{{ $usuario->Telefono }}</td>
											<td>{{ $usuario->Direccion }}</td>

                                            <td>
                                                <form action="{{ route('usuario.destroy',$usuario->id) }}" method="POST">
                                                    <a class="btn  btn-primary " href="{{ route('usuario.show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('ver') }}</a>
                                                    <a class="btn  btn-warning" href="{{ route('usuario.edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <input class="btn btn-danger" type="submit" onclick="return confirm ('¿deseas borrar?')"  value="Borrar">
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
