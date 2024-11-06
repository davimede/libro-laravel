<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', function () { return view('welcome'); });

Route::get('/libros', [LibroController::class, 'libros']);

Route::get('/libros/create', [LibroController::class, 'create']);
Route::get('/libros/show', [LibroController::class, 'show']);
Route::get('/libros/update', [LibroController::class, 'update']);
Route::get('/libros/delete', [LibroController::class, 'delete']);

Route::post('/libros/store', [LibroController::class, 'store']);

?>