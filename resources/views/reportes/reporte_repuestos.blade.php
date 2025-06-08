<!DOCTYPE html>
<html>
<head>
    <title>Repuestos con Stock Bajo</title>
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
    <h1>🧩 Repuestos con Stock Bajo</h1>

    <form method="GET" class="filtros">
        <input type="number" name="id_repuesto" placeholder="ID Repuesto" value="{{ request('id_repuesto') }}">
        <input type="text" name="nombre" placeholder="Nombre" value="{{ request('nombre') }}">
        <input type="text" name="rango_stock" placeholder="Stock: min-max" value="{{ request('rango_stock') }}">
        <input type="text" name="rango_precio" placeholder="Precio: min-max" value="{{ request('rango_precio') }}">
        <button class="btn">Filtrar</button>
    </form>

    <div class="acciones">
        <a href="{{ route('reportes.repuestos.csv', request()->query()) }}" class="btn">Descargar CSV</a>
    </div>

    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th><th>Nombre</th><th>Stock</th><th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($repuestos as $r)
                <tr>
                    <td>{{ $r->id_repuesto }}</td>
                    <td>{{ $r->nombre }}</td>
                    <td>{{ $r->stock }}</td>
                    <td>{{ $r->precio }}</td>
                </tr>
            @empty
                <tr><td colspan="5" style="text-align:center;">Sin resultados</td></tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
