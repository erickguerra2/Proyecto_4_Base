<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function vehiculosReparacion()
    {
        return view('reportes.vehiculos_reparacion');
    }

    public function servicios()
    {
        return view('reportes.servicios');
    }

    public function facturacion()
    {
        return view('reportes.facturacion');
    }
}
