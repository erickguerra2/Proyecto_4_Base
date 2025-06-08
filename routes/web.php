<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;

// Panel principal
use App\Http\Controllers\OrdenDetalleController;
Route::get('/', function () {
    return view('panel');
})->name('panel');

// Gestión de entidades
Route::view('/clientes', 'clientes')->name('clientes.index');
Route::view('/vehiculos', 'vehiculos')->name('vehiculos.index');

// Rutas para reportes existentes
Route::get('/reportes/ordenes',    [ReporteController::class, 'ordenesDetalle'])->name('reportes.vehiculos');
Route::get('/reportes/facturas',   [ReporteController::class, 'facturasCompletas'])->name('reportes.facturacion');
Route::get('/reportes/repuestos',  [ReporteController::class, 'repuestosBajos'])->name('reportes.repuestos');

// Rutas para reportes
Route::get('/reportes/ordenes', [ReporteController::class, 'vehiculosReparacion'])->name('reportes.vehiculos');
Route::get('/reportes/facturas', [ReporteController::class, 'facturacion'])->name('reportes.facturacion');
Route::get('/reportes/bitacora', [ReporteController::class, 'servicios'])->name('reportes.servicios');

Route::resource('/ordenes', OrdenDetalleController::class);
