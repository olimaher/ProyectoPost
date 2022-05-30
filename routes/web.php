<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;


Route::get('/',[CategoriasController::class, 'index'])->name('categorias.index');
Route::get('/create',[CategoriasController::class, 'create'])->name('categorias.create');
Route::post('/store',[CategoriasController::class, 'store'])->name('categorias.store');
Route::get('/edit/{id}',[CategoriasController::class, 'edit'])->name('categorias.edit');
Route::put('/update/{id}',[CategoriasController::class, 'update'])->name('categorias.update');
Route::get('delete/{id}',[CategoriasController::class, 'destroy'])->name('categorias.delete');
Route::get('ver/{id}',[CategoriasController::class, 'show'])->name('categorias.ver');

