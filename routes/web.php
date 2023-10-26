<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::resource ('persona', PersonaController::class)-> middleware('auth');

Route::resource ('citas', App\Http\Controllers\CitaController::class)-> middleware('auth');

Route::resource ('inventario', App\Http\Controllers\InventarioController::class)-> middleware('auth');


Route::resource ('usuario', App\Http\Controllers\UsuarioController::class)-> middleware('auth');


Auth::routes();

Route::get('/home', [PersonaController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function () {
    Route::get('/', [PersonaController::class, 'index'])->name('home');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
