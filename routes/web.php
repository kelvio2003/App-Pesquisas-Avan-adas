<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\UsuariosController;

Route::get('/', [UsuariosController:: class, 'index']);
Route::get('/cadastrar', [UsuariosController:: class, 'cadastrar']);
Route::get('/usuarios', [UsuariosController:: class, 'usuarios']);
Route::post('/cadastrados', [UsuariosController:: class, 'cadastrados']);
Route::delete('/usuarios/{id}', [UsuariosController:: class, 'deletar']);