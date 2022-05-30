@extends('layout/plantilla')
@section('tituloPagina', 'Crud Con Laravel 8')
@section('contenido')
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="card">
            <div class="card-header">
            Categorias
        </div>
            <div class="card-body">
            <h5 class="card-title">Lista de categorias</h5>
            <table class="table table-responsive table-dark table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Categorías</th>
                    <th>Descripción</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a href="{{ route("categorias.ver", [ 'id' => $item->id ]) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route("categorias.edit", [ 'id' => $item->id ]) }}" class="btn btn-success">Actualizar</a>
                            <a href="{{ route("categorias.delete", ['id'=>$item->id]) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p>
            <a href="{{route("categorias.create")}}" class="btn btn-primary"><span <i class="fas fa-file-plus"></i></span> Agregar Categoria</a>
            </p>
        </div>
@endsection
