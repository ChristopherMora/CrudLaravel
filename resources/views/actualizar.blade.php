@extends('layout/plantilla')

@section("tituloPagina", "Nuevo Registro")

@section('contenido')
    <div class="card">
        <div class="card-header">
        Actualizar Nuevo
        </div>
        <div class="card-body">
            <p class="card-text">
                <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Apellido Paterno</label>
                    <input type="text" name="paterno" class="form-control" required value="{{ $personas->paterno}}">
                    
                    <label for="">Apellido Materno</label>
                    <input type="text" name="materno" class="form-control" required value="{{ $personas->materno}}">

                    <label for="">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required value="{{ $personas->nombre}}">

                    <label for="">Fecha Nacimiento</label>
                    <input type="text" name="fecha_nacimiento" class="form-control" required value="{{ $personas->fecha_nacimiento}}">
                    <br>
                    <a class="btn btn-warning" href=" {{ route("personas.index") }} ">Regresar</a>
                    <button class="btn btn-success">Agregar</button>
                    
                </form>
            </p>
            </div>
    </div>
@endsection