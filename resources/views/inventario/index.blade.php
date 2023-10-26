@extends('layouts.app')

@section('template_title')
    Inventario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
        <div class="col-sm-8" style="margin:auto">
          
                            <div class="card">
                                <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
            
            
                        <div class="float-right">
                        <a href="{{ route('inventario.create') }}" class="btn btn-success  float-right"  data-placement="left">
                            {{ __('Registrar Producto') }}
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
                                        
										<th>Codigo</th>
										<th>Producto</th>
										<th>Existencias</th>
										<th>Entradas</th>
										<th>Salidas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inventarios as $inventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $inventario->codigo }}</td>
											<td>{{ $inventario->producto }}</td>
											<td>{{ $inventario->existencias }}</td>
											<td>{{ $inventario->entradas }}</td>
											<td>{{ $inventario->salidas }}</td>

                                            <td>
                                                <form action="{{ route('inventario.destroy',$inventario->id) }}" method="POST">
                                                    <a class="btn btn-primary " href="{{ route('inventario.show',$inventario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-warning" href="{{ route('inventario.edit',$inventario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger onclick="onclick="return confirm ('¿deseas borrar?')"  value="borrar"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $inventarios->links() !!}
            </div>
        </div>
    </div>
@endsection
