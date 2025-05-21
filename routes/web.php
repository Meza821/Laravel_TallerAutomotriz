<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\BusquedasController;
use App\Http\Controllers\FacturaController;
Route::resource('services', ServiceController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Ruta para el módulo de facturación y middleware de autenticación y verificación
Route::get('services.facturacion', function () {
    return view('services.facturacion');
})->middleware(['auth', 'verified'])->name('services.facturacion');


//Midleware para modulo de servicios
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');

});

//Rutas para facturacion
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/facturacion', [ServiceController::class, 'index'])->name('facturacion.blade');
    Route::get('/factura/json/{id}', [FacturaController::class, 'generarJsonFactura']);
    Route::post('/factura/crear', [FacturaController::class, 'storeFactura'])->name('factura.crear');



});
Route::get('/buscar-servicio', [BusquedasController::class, 'buscarServicio'])->name('buscar.servicio');
Route::get('/buscar-servicio-codigo', [BusquedasController::class, 'buscarServicioPorCodigo'])->name('buscar.servicio.codigo');
Route::get('/buscar-cliente', [BusquedasController::class, 'buscarCliente'])->name('buscar.cliente');

// Middleware para el módulo de clientes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::patch('/clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
    Route::get('/clientes/distritos/{id}', [ClienteController::class, 'getDistritos'])->where('id', '.*');

});



//Ruta default que traia
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Ruta para enviar la factura
Route::post('/factura', [FacturaController::class, 'generarFactura'])->name('factura.generar');

require __DIR__ . '/auth.php';
