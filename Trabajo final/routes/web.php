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

Route::resource('pelicula', 'App\Http\Controllers\PeliculaController');
Route::resource('renta', 'App\Http\Controllers\RentaController');
Route::resource('cliente', 'App\Http\Controllers\ClienteController');
Route::resource('membresia', 'App\Http\Controllers\MembresiaController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
