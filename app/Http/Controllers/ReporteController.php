<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    public function vehiculosReparacion()
    {
        $ordenes = DB::table('vista_ordenes_detalle')->get();
        return view('reportes.reporte_ordenes_detalle', compact('ordenes'));
    }

    public function facturacion()
    {
        $facturas = DB::table('vista_facturas_completas')->get();
        return view('reportes.reporte_facturas', compact('facturas'));
    }

    public function servicios()
    {
        $cambios = DB::table('bitacora_cambio')->orderBy('created_at', 'desc')->get();
        return view('reportes.reporte_bitacora', compact('cambios'));
    }
}
