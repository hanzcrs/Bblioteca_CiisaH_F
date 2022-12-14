@extends('layouts.app')

@section('template_title')
    Libros
@endsection

@section('content')
<style>
    body {
        background: url('https://cdn.pixabay.com/photo/2016/12/03/00/26/roof-1878904_960_720.jpg');
        background-repeat: no-repeat;
        background-size: 100vw 100vh;
  
    }
  
  </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado libros') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('libros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo libro') }}
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
                            <table class="table table-dark table-striped">
                                <thead class="thead">
                                    <tr>
                                        <th>Nº</th>
                                        
										<th>Nombre</th>
										<th>Autor</th>
										<th>Editorial</th>
										<th>Categoria</th>
                                        <th>Disponible</th>
										<th>Cantidad</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->nombre }}</td>
											<td>{{ $libro->autor }}</td>
											<td>{{ $libro->editorial }}</td>
											<td>{{ $libro->categoria }}</td>
                                            <td><select id="inputState" class="form-select">
                                                  <option selected>Selecionar</option>
                                                  <option>Disponible</option>
                                                  <option>No Disponible</option></td>
											<td><select id="inputState" class="form-select">
                                                <option selected>Selecionar</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option></td>

                                            <td>
                                                <form action="{{ route('libros.destroy',$libro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('libros.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('libros.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
@endsection
