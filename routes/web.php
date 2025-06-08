<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;

// Panel principal
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

// CSV
Route::get('/reportes/ordenes/csv',   [ReporteController::class, 'ordenesCsv'])->name('reportes.ordenes.csv');
Route::get('/reportes/facturas/csv',  [ReporteController::class, 'facturasCsv'])->name('reportes.facturas.csv');
Route::get('/reportes/repuestos/csv', [ReporteController::class, 'repuestosCsv'])->name('reportes.repuestos.csv');
