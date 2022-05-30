@extends('layout/plantilla')
@section("tituloPagina"," Actualizar Categoria")
@section('contenido')
 <div class="card">
    <div class="card-header">
        <h3>Actualizar Categoría</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
            <form method="POST" action="{{ route("categorias.update", [ 'id' => $categoria->id ]) }}">
                @csrf @method('put')
                <input name="nombre" class="form-control form-control-lg" type="text" placeholder="Nombre de categoría" aria-label=".form-control-lg example" value="{{ $categoria->nombre }}"><br>
                <input name="descripcion" class="form-control form-control-lg" type="text" placeholder="Descripción" aria-label=".form-control-lg example" value="{{ $categoria->descripcion }}"><br>
                <a href="{{ route("categorias.index") }}" class="btn btn-secondary">Regresar</a>
                <input type="submit" value="Actualizar" class="btn btn-primary">
            </form>
        </p>
    </div>
   </div>
@endsection
