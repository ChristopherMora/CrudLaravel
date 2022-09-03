@extends('layout/plantilla')

@section("tituloPagina", "Nuevo Registro")

@section('contenido')
    <div class="card">
        <div class="card-header">
        Agregar Nuevo
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('personas.store') }}" method="POST">
                    @csrf
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" required>
                    
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" required>

                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>

                    <label for="">Fecha Nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control" required>
                    <br>
                    <a class="btn btn-info" href=" {{ route("personas.index") }} ">Regresar</a>
                    <button class="btn btn-success">Agregar</button>
                    
                </form>
            </p>
            </div>
    </div>
@endsection