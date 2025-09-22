<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Models\Cliente;
use App\Models\Crud;
use Illuminate\Database\Query\IndexHint;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard/formulario', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/dashboard/formulario', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/dashboard/consultar', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/edit', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/delete', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/formulario', [ClienteController::class, 'create'])->name('clientes.create');
    Route::resource('clientes', ClienteController::class);
});
require __DIR__.'/auth.php';

