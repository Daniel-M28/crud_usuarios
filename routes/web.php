<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/* Route::get('/persona', function () {
    return view('persona.index');
});

Route::get('persona/create', [PersonaController::class,'create']); */

Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio')->middleware('auth');;

Route::get('/tienda', function () {
    return view('tienda');
})->name('tienda')->middleware('auth');;

Route::get('/carrito', function () {
    return view('carrito');
})->name('carrito')->middleware('auth');;



Route::resource ('citas', App\Http\Controllers\CitaController::class)-> middleware('auth');

Route::resource ('inventario', App\Http\Controllers\InventarioController::class)-> middleware('auth');


Route::resource ('usuario', App\Http\Controllers\UsuarioController::class)-> middleware('auth');


Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    // Redirige a la página de inicio después de iniciar sesión
    Route::get('/', function () {
        return view('inicio');
    })->name('home');
});
