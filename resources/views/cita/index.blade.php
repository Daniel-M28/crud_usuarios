@extends('layouts.app')

@section('template_title')
    Cita
@endsection

@section('content')
</ul>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8" style="margin:auto">

          
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                          

                             <div class="float-right">
                                <a href="{{ route('citas.create') }}" class="btn btn-success  float-right"  data-placement="left">
                                  {{ __('Agendar Cita') }}
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
										<th>Cedula</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($citas as $cita)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cita->nombre }}</td>
											<td>{{ $cita->cedula }}</td>
											<td>{{ $cita->fecha }}</td>
                                            
                                           
                                            <td>  
                                                <form action="{{ route('citas.destroy',$cita->id) }}" method="POST">
                                                    
                                               <a class="btn btn-primary " href="{{ route('citas.show',$cita->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('ver') }}</a>
                                                    <a class="btn btn-warning" href="{{ route('citas.edit',$cita->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $citas->links() !!}
            </div>
        </div>
    </div>
@endsection
