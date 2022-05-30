<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        //pagina de inicio de nuestro crud
         $datos = Categoria:: all();
         return view('welcome',compact('datos'));

    }

    public function create()
    {
        //formulario donde agregamos los datos
        return view('layout.agregar');


    }


    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        Categoria::create([
            'nombre' => $request->nombreCategoria,
            'descripcion' => $request->descripcion
        ]);

        return redirect('/')->with('message', 'Categoría creada con éxito');
    }


    public function show($id)
    {
        //obtener solo un registro de nuestra tabla
        $categoria = Categoria::findOrFail($id);

        return view('layout.ver', compact('categoria'));
    }


    public function edit($id)
    {
        //sirve para traer los datos que se van a editar y los coloca en un formulario
        $categoria = Categoria::findOrFail($id);
        return view('layout.actualizar', compact('categoria'));

    }

    public function update(Request $request, $id)
    {
        //actualiza los datos en la bd
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        return redirect('/')->with('message', 'Categoría actualizada con éxito');
    }

    public function destroy($id)
    {
        //elimina un registro
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect('/')->with('message', 'Registro eliminado con éxito');
    }
}
