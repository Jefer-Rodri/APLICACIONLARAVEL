<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
Route::post('usuarios', [UsuarioController::class, 'store']);
Route::patch('usuarios/{id}', [UsuarioController::class, 'update']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);


Route::get('libros', [LibroController::class, 'index']);
Route::get('libros/{id}', [LibroController::class, 'show']);
Route::post('libros', [LibroController::class, 'store']);
Route::patch('libros/{idLibroController}', [LibroController::class, 'update']);
Route::delete('libros/{id}', [LibroController::class, 'destroy']);


Route::get('autores', [AutorController::class, 'index']);
Route::get('autores/{id}', [AutorController::class, 'show']);
Route::post('autores', [AutorController::class, 'store']);
Route::patch('autores/{id}', [AutorController::class, 'update']);
Route::delete('autores/{id}', [AutorController::class, 'destroy']);


Route::get('categorias', [CategoriaController::class, 'index']);
Route::get('categorias/{id}', [CategoriaController::class, 'show']);
Route::post('categorias', [CategoriaController::class, 'store']);
Route::patch('categorias/{id}', [CategoriaController::class, 'update']);
Route::delete('categorias/{id}', [CategoriaController::class, 'destroy']);


Route::get('reseñas', [ReseñaController::class, 'index']);
Route::get('reseñas/{id}', [ReseñaController::class, 'show']);
Route::post('reseñas', [ReseñaController::class, 'store']);
Route::patch('reseñas/{id}', [ReseñaController::class, 'update']);
Route::delete('reseñas/{id}', [ReseñaController::class, 'destroy']);