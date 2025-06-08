<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;

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
Route::get('/reportes/vehiculos-reparacion', [ReporteController::class, 'vehiculosReparacion'])->name('reportes.vehiculos');
Route::get('/reportes/servicios-populares', [ReporteController::class, 'servicios'])->name('reportes.servicios');
Route::get('/reportes/facturacion-mensual', [ReporteController::class, 'facturacion'])->name('reportes.facturacion');
