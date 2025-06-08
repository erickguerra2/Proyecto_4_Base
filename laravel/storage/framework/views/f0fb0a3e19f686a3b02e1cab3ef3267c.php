<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Facturación Mensual</title>
    <style>
        body {
            background-color: #d3d4ce;
            font-family: 'Segoe UI', sans-serif;
            padding: 2rem;
        }

        h1 {
            color: #0e3f41;
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .filtros, .acciones {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 1rem;
        }

        input, select {
            padding: 0.6rem;
            border: 1px solid #aaa;
            border-radius: 6px;
            font-size: 1rem;
            background-color: #f7f9f8;
            color: black;
        }

        .btn {
            background-color: #748c84;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.6rem 1.2rem;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #5e796e;
        }

        .tabla {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 1.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .tabla th, .tabla td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        .tabla th {
            background-color: #4e8c7b;
            color: white;
        }
    </style>
</head>
<body>

    <h1>📊 Facturación Mensual</h1>

    <form method="GET" class="filtros">
        <input type="month" name="mes">
        <select name="forma_pago">
            <option value="">Forma de Pago</option>
            <option>Tarjeta</option><option>Efectivo</option>
        </select>
        <input type="number" name="min_total" placeholder="Mínimo Total">
        <input type="number" name="max_total" placeholder="Máximo Total">
        <input type="text" name="cliente" placeholder="Cliente">
        <button class="btn" type="submit">Filtrar</button>
    </form>

    <div class="acciones">
        <button class="btn" onclick="exportarCSV()">Exportar CSV</button>
    </div>

    <table class="tabla">
        <thead><tr><th>Factura</th><th>Cliente</th><th>Fecha</th><th>Total</th><th>Forma de Pago</th></tr></thead>
        <tbody>
            <tr><td>F001</td><td>Juan Pérez</td><td>2024-06-01</td><td>$250.00</td><td>Tarjeta</td></tr>
            <tr><td>F002</td><td>Maria López</td><td>2024-06-05</td><td>$340.00</td><td>Efectivo</td></tr>
        </tbody>
    </table>

    <script>
    function exportarCSV() {
        const datos = [["Factura", "Cliente", "Fecha", "Total", "Forma de Pago"], ["F001", "Juan Pérez", "2024-06-01", "$250.00", "Tarjeta"]];
        let csv = datos.map(e => e.join(",")).join("\n");
        let blob = new Blob([csv], { type: 'text/csv' });
        let link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "facturacion_mensual.csv";
        link.click();
    }
    </script>

</body>
</html>
<?php /**PATH /var/www/laravel/resources/views/reportes/facturacion.blade.php ENDPATH**/ ?>