<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {})->name('dashboard');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//Route::get('/vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');
//Route::get('/ventas', [VentaController::class, 'index'])->name('ventas.index');
//Route::get('/servicios', [ServicioController::class, 'index'])->name('servicios.index');
//Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');
//Route::get('/logout', [UserController::class, 'logout'])->name('logout');
