@extends('layout/plantilla')
@section("tituloPagina","Agregar Nuevo Registro")
@section('contenido')

 <div class="card">
    <div class="card-header">
        <h3>Agregar Nueva Categoría</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <form action="{{route("categorias.store")}}" method="POST">
                @csrf
                <input name="nombreCategoria" class="form-control form-control-lg" type="text" placeholder="Nombre de categoría" aria-label=".form-control-lg example"><br>
                <input name="descripcion" class="form-control form-control-lg" type="text" placeholder="Descripcion" aria-label=".form-control-lg example"><br>
                <a href="{{route("categorias.index")}}" class="btn btn-secondary">Regresar</a>
                <input type="submit" class="btn btn-primary" value="Agregar">
            </form>
        </p>
    </div>
   </div>
@endsection
