@extends('layout/plantilla')
@section("tituloPagina",$categoria->nombre)
@section('contenido')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $categoria->nombre }}</h5>
            <h4>Descripción</h4>
            <p class="card-text">{{ $categoria->descripcion }}</p>
            <h4>última actualización</h4>
            <p class="card-text">{{ $categoria->updated_at }}</p>
            <a href="{{route("categorias.index")}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
@endsection
