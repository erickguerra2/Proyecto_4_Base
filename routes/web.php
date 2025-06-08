<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\OrdenDetalleController;
Route::get('/', function () {
    return view('panel');
})->name('panel');

// Gestión de entidades
Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes.index');

Route::get('/vehiculos', function () {
    return view('vehiculos');
})->name('vehiculos.index');

// Rutas para reportes
Route::get('/reportes/ordenes', [ReporteController::class, 'vehiculosReparacion'])->name('reportes.vehiculos');
Route::get('/reportes/facturas', [ReporteController::class, 'facturacion'])->name('reportes.facturacion');
Route::get('/reportes/bitacora', [ReporteController::class, 'servicios'])->name('reportes.servicios');
Route::resource('ordenes', OrdenDetalleController::class);