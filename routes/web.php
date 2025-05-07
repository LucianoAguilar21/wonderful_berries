<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\PalletController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QualityInspectionController;
use Illuminate\Support\Facades\Route;

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

    // Route::resource('orders', OrderController::class);
    // Route::resource('orders.pallets', PalletController::class);
    // Route::resource('quality-inspections', QualityInspectionController::class);
    // Mostrar todos los pedidos
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

    // Formulario para crear un nuevo pedido
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');

    // Guardar nuevo pedido
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

    // Formulario para editar un pedido existente
    Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');

    // Actualizar el pedido
    Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');

    // Eliminar pedido (si decidís hacerlo luego)
    Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.destroy');
});

require __DIR__ . '/auth.php';
