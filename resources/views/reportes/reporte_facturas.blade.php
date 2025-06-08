<!DOCTYPE html>
<html>
<head>
    <title>Facturas Emitidas</title>
    <style>
        body { background:#d3d4ce;font-family:Arial,sans-serif;padding:2rem; }
        h1 { color:#0e3f41;text-align:center; }
        .filtros,.acciones{display:flex;gap:1rem;flex-wrap:wrap;justify-content:center;margin-bottom:1rem;}
        .tabla{width:100%;border-collapse:collapse;background:#fff;}
        th,td{padding:10px;border:1px solid #ccc;text-align:left;}
        th{background:#748c84;color:#fff;}
        .btn{background:#748c84;color:#fff;padding:.5rem 1rem;border:none;border-radius:5px;cursor:pointer;}
    </style>
</head>
<body>
    <h1>📑 Facturas Emitidas</h1>

    <form method="GET" class="filtros">
        <input type="number" name="id_factura" placeholder="ID Factura" value="{{ request('id_factura') }}">
        <input type="text"   name="cliente"    placeholder="Cliente"    value="{{ request('cliente') }}">
        <input type="text"   name="placa"      placeholder="Placa"      value="{{ request('placa') }}">
        <select name="forma_pago">
            <option value="">Forma de Pago</option>
            @foreach (['Efectivo','Tarjeta','Transferencia'] as $p)
                <option value="{{ $p }}" {{ request('forma_pago')==$p ? 'selected' : '' }}>{{ $p }}</option>
            @endforeach
        </select>
        <input type="date" name="desde" value="{{ request('desde') }}">
        <input type="date" name="hasta" value="{{ request('hasta') }}">
        <input type="text" name="rango_total" placeholder="Total: min-max" value="{{ request('rango_total') }}">
        <button class="btn">Filtrar</button>
    </form>


    <div class="acciones">
        <a href="{{ route('reportes.facturas.csv', request()->query()) }}" class="btn">Descargar CSV</a>
    </div>

    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th><th>Fecha</th><th>Total</th><th>Pago</th><th>Cliente</th><th>Placa</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($facturas as $f)
                <tr>
                    <td>{{ $f->id_factura }}</td>
                    <td>{{ $f->fecha_emision }}</td>
                    <td>{{ $f->total_facturado }}</td>
                    <td>{{ $f->forma_pago }}</td>
                    <td>{{ $f->cliente }}</td>
                    <td>{{ $f->placa }}</td>
                </tr>
            @empty
                <tr><td colspan="6" style="text-align:center;">Sin resultados</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
