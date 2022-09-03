@extends('layout/plantilla')

@section('tituloPagina', 'Hola Mundo')
    
@section('contenido')
<br><br>

    

    <div class="card">
        <div class="card-header">
        Crud con laravel 8 y msqli
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title">Listado de personas en sistema</h5>
            <p><a href="{{ route("personas.create") }}" class="btn btn-primary">Agregar nuev a personas</a></p>
            <p class="card-text">
                <div class="table table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido Parterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha Nacimiento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>

                        @foreach ($datos as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->paterno }}</td>
                                <td>{{ $item->materno }}</td>
                                <td>{{ $item->fecha_nacimiento }}</td>
                                <td>

                                    <form action="{{ route("personas.edit", $item->id) }}" method="GET">
                                        <button class="btn btn-warning btn-sm">
                                            <span>Editar</span>
                                        </button>
                                    </form>

                                </td>

                                <td>

                                    <form action="{{ route("personas.show", $item->id) }}" method="GET">
                                        <button class="btn btn-danger btn-sm">
                                            <span>Eliminar</span>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </p>
        </div>
    </div>
@endsection