<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios Más Solicitados</title>
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

    <h1>🛠️ Servicios Más Solicitados</h1>

    <form method="GET" class="filtros">
        <input type="text" name="nombre" placeholder="Nombre servicio">
        <select name="categoria">
            <option value="">Categoría</option>
            <option>Mecánica</option><option>Pintura</option>
        </select>
        <input type="date" name="desde">
        <input type="date" name="hasta">
        <input type="number" name="min_uso" placeholder="Uso mínimo">
        <button class="btn" type="submit">Filtrar</button>
    </form>

    <div class="acciones">
        <button class="btn" onclick="exportarCSV()">Exportar CSV</button>
    </div>

    <table class="tabla">
        <thead><tr><th>Servicio</th><th>Veces Usado</th><th>Precio Base</th></tr></thead>
        <tbody>
            <tr><td>Alineación</td><td>34</td><td>$45.00</td></tr>
            <tr><td>Cambio de Aceite</td><td>28</td><td>$30.00</td></tr>
        </tbody>
    </table>

    <script>
    function exportarCSV() {
        const datos = [["Servicio", "Veces Usado", "Precio Base"], ["Alineación", 34, "$45.00"]];
        let csv = datos.map(e => e.join(",")).join("\n");
        let blob = new Blob([csv], { type: 'text/csv' });
        let link = document.createElement("a");
        link.href = URL.createObjectURL(blob);
        link.download = "servicios_mas_solicitados.csv";
        link.click();
    }
    </script>

</body>
</html>
<?php /**PATH /var/www/laravel/resources/views/reportes/servicios.blade.php ENDPATH**/ ?>