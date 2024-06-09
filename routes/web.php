<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Home\HomeController;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('auth.login');
    })->name('app');
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('show.login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
});

Route::view('/users/create', 'users.create')->name('users.create');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('welcome')->middleware('auth');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dash.index');
    })->name('dashboard');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
});

Route::get('/vehiculos', [\App\Http\Controllers\VehiculoController::class, 'index'])->name('vehiculos.index');
Route::get('/ventas', [\App\Http\Controllers\VentaController::class, 'index'])->name('ventas.index');
Route::get('/servicios', [\App\Http\Controllers\ServicioController::class, 'index'])->name('servicios.index');
Route::get('/inventario', [\App\Http\Controllers\InventarioController::class, 'index'])->name('inventario.index');


