<!DOCTYPE html>
<html>
<head>
    <title>Órdenes de Reparación</title>
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
    <h1>📋 Órdenes de Reparación</h1>

    <form method="GET" class="filtros">
        <input type="number" name="id_orden" placeholder="ID Orden"   value="{{ request('id_orden') }}">
        <input type="text"   name="cliente"  placeholder="Cliente"    value="{{ request('cliente') }}">
        <input type="text"   name="placa"    placeholder="Placa"      value="{{ request('placa') }}">
        <select name="estado">
            <option value="">Estado</option>
            @foreach (['Pendiente','Reparación','Completada'] as $e)
                <option value="{{ $e }}" {{ request('estado')==$e ? 'selected' : '' }}>{{ $e }}</option>
            @endforeach
        </select>
        <input type="text" name="rango_total" placeholder="Total: min-max" value="{{ request('rango_total') }}">
        <button class="btn">Filtrar</button>
    </form>

    <div class="acciones">
        <a href="{{ route('reportes.ordenes.csv', request()->query()) }}" class="btn">Descargar CSV</a>
    </div>

    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th><th>Cliente</th><th>Placa</th><th>Estado</th><th>Total</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($ordenes as $o)
                <tr>
                    <td>{{ $o->id_orden }}</td>
                    <td>{{ $o->cliente }}</td>
                    <td>{{ $o->placa }}</td>
                    <td>{{ $o->estado }}</td>
                    <td>{{ $o->total_estimado }}</td>
                </tr>
            @empty
                <tr><td colspan="5" style="text-align:center;">Sin resultados</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
