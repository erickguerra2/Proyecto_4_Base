<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class ReporteController extends Controller
{
    public function ordenesDetalle(Request $request)
    {
        $query = DB::table('vista_ordenes_detalle');

        if ($request->filled('id_orden')) {
            $query->where('id_orden', $request->id_orden);
        }

        if ($request->filled('cliente')) {
            $query->where('cliente', 'like', '%' . $request->cliente . '%');
        }

        if ($request->filled('placa')) {
            $query->where('placa', 'like', '%' . $request->placa . '%');
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('rango_total')) {
            [$min, $max] = explode('-', $request->rango_total);
            $query->whereBetween('total_estimado', [(float)$min, (float)$max]);
        }

        $ordenes = $query->get();
        return view('reportes.reporte_ordenes_detalle', compact('ordenes'));
    }

    public function repuestosBajos(Request $request)
    {
        $query = DB::table('vista_repuestos_bajos');

        if ($request->filled('id_repuesto')) {
            $query->where('id_repuesto', $request->id_repuesto);
        }

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('rango_stock')) {
            [$min, $max] = explode('-', $request->rango_stock);
            $query->whereBetween('stock', [(int)$min, (int)$max]);
        }

        if ($request->filled('rango_precio')) {
            [$min, $max] = explode('-', $request->rango_precio);
            $query->whereBetween('precio', [(float)$min, (float)$max]);
        }

        $repuestos = $query->get();
        return view('reportes.reporte_repuestos', compact('repuestos'));
    }

    public function facturasCompletas(Request $request)
    {
        $query = DB::table('vista_facturas_completas');

        if ($request->filled('id_factura')) {
            $query->where('id_factura', $request->id_factura);
        }

        if ($request->filled('cliente')) {
            $query->where('cliente', 'like', '%' . $request->cliente . '%');
        }

        if ($request->filled('placa')) {
            $query->where('placa', 'like', '%' . $request->placa . '%');
        }

        if ($request->filled('forma_pago')) {
            $query->where('forma_pago', $request->forma_pago);
        }

        if ($request->filled('desde')) {
            $query->whereDate('fecha_emision', '>=', $request->desde);
        }

        if ($request->filled('hasta')) {
            $query->whereDate('fecha_emision', '<=', $request->hasta);
        }

        if ($request->filled('rango_total')) {
            [$min, $max] = explode('-', $request->rango_total);
            $query->whereBetween('total_facturado', [(float)$min, (float)$max]);
        }

        $facturas = $query->get();
        return view('reportes.reporte_facturas', compact('facturas'));
    }

    public function ordenesCsv(Request $request)
    {
        $data = $this->ordenesDetalle($request)->getData()['ordenes'];
        return Response::make($this->convertToCsv($data), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="ordenes_detalle.csv"',
        ]);
    }

    public function repuestosCsv(Request $request)
    {
        $data = $this->repuestosBajos($request)->getData()['repuestos'];
        return Response::make($this->convertToCsv($data), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="repuestos_bajos.csv"',
        ]);
    }

    public function facturasCsv(Request $request)
    {
        $data = $this->facturasCompletas($request)->getData()['facturas'];
        return Response::make($this->convertToCsv($data), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="facturas_completas.csv"',
        ]);
    }

    private function convertToCsv($collection)
    {
        if ($collection->isEmpty()) return '';

        $csv = implode(',', array_keys((array) $collection->first())) . "\n";

        foreach ($collection as $row) {
            $csv .= implode(',', array_map(function ($val) {
                return '"' . str_replace('"', '""', $val) . '"';
            }, (array) $row)) . "\n";
        }

        return $csv;
    }
}
