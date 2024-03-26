<?php
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Autores
Route::get('autores',[AutorController::class,'index']); 
Route::get('autores/{id}',[AutorController::class,'show']); 
Route::post('autores',[AutorController::class,'store']); 
Route::patch('autores/{id}',[AutorController::class,'update']); 
Route::delete('autores/{id}',[AutorController::class,'destroy']); 
//Categorias
Route::get('categorias',[CategoriaController::class,'index']); 
Route::get('categorias/{id}',[CategoriaController::class,'show']); 
Route::post('categorias',[CategoriaController::class,'store']); 
Route::patch('categorias/{id}',[CategoriaController::class,'update']); 
Route::delete('categorias/{id}',[CategoriaController::class,'destroy']); 
//Usuarios
Route::get('usuarios',[UsuarioController::class,'index']); 
Route::get('usuarios/{id}',[UsuarioController::class,'show']); 
Route::post('usuarios',[UsuarioController::class,'store']); 
Route::patch('usuarios/{id}',[UsuarioController::class,'update']); 
Route::delete('usuarios/{id}',[UsuarioController::class,'destroy']); 