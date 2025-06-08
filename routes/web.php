<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReporteController;
<<<<<<< HEAD

// Panel principal
=======
use App\Http\Controllers\OrdenDetalleController;
>>>>>>> 8fd25668797f83c2a4dd1678f4ed19e93f749c62
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

<<<<<<< HEAD
// CSV
Route::get('/reportes/ordenes/csv',   [ReporteController::class, 'ordenesCsv'])->name('reportes.ordenes.csv');
Route::get('/reportes/facturas/csv',  [ReporteController::class, 'facturasCsv'])->name('reportes.facturas.csv');
Route::get('/reportes/repuestos/csv', [ReporteController::class, 'repuestosCsv'])->name('reportes.repuestos.csv');
=======
// Rutas para reportes
Route::get('/reportes/ordenes', [ReporteController::class, 'vehiculosReparacion'])->name('reportes.vehiculos');
Route::get('/reportes/facturas', [ReporteController::class, 'facturacion'])->name('reportes.facturacion');
Route::get('/reportes/bitacora', [ReporteController::class, 'servicios'])->name('reportes.servicios');
Route::resource('ordenes', OrdenDetalleController::class);
>>>>>>> 8fd25668797f83c2a4dd1678f4ed19e93f749c62
