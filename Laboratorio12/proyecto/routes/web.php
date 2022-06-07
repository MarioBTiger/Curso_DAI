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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/estudiante', [App\Http\Controllers\EstudianteController::class, 'index']);
Route::get('/estudiante/crear', [App\Http\Controllers\EstudianteController::class, 'getCrear']);
Route::post('/estudiante/crear', [App\Http\Controllers\EstudianteController::class, 'postCrear']);
Route::get('/estudiante/actualizar', [App\Http\Controllers\EstudianteController::class, 'getActualizar']);
Route::post('/estudiante/actualizar', [App\Http\Controllers\EstudianteController::class, 'postActualizar']);
Route::get('/estudiante/eliminar', [App\Http\Controllers\EstudianteController::class, 'getEliminar']);

