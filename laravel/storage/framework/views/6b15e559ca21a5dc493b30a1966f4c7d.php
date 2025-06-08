<!DOCTYPE html>
<html>
<head>
    <title>Vehículos en Reparación</title>
    <style>
        body { background: #d3d4ce; font-family: Arial, sans-serif; padding: 2rem; }
        h1 { color: #0e3f41; text-align: center; }
        .filtros, .acciones { display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; margin-bottom: 1rem; }
        .tabla { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #748c84; color: white; }
        .btn { background: #748c84; color: white; padding: 0.5rem 1rem; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <h1>🚗 Vehículos en Reparación</h1>

    <form method="GET" class="filtros">
        <input type="text" name="placa" placeholder="Placa">
        <select name="marca">
            <option value="">Marca</option>
            <option>Nissan</option><option>Ford</option>
        </select>
        <select name="estado">
            <option value="">Estado</option>
            <option value="Reparación">Reparación</option>
        </select>
        <input type="number" name="anio" placeholder="Año">
        <input type="text" name="color" placeholder="Color">
        <button class="btn" type="submit">Filtrar</button>
    </form>

    <div class="acciones">
        <button class="btn" onclick="exportarCSV()">Exportar CSV</button>
    </div>

    <table class="tabla">
        <thead>
            <tr>
                <th>ID</th><th>Placa</th><th>Marca</th><th>Modelo</th><th>Año</th><th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>ABC123</td><td>Nissan</td><td>Versa</td><td>2015</td><td>Reparación</td></tr>
            <tr><td>2</td><td>XYZ789</td><td>Ford</td><td>Focus</td><td>2018</td><td>Reparación</td></tr>
        </tbody>
    </table>

    <script>
        function exportarCSV() {
            const datos = [["ID", "Placa", "Marca", "Modelo", "Año", "Estado"], [1, "ABC123", "Nissan", "Versa", 2015, "Reparación"]];
            let csv = datos.map(e => e.join(",")).join("\n");
            let blob = new Blob([csv], { type: 'text/csv' });
            let link = document.createElement("a");
            link.href = URL.createObjectURL(blob);
            link.download = "vehiculos_reparacion.csv";
            link.click();
        }
    </script>
</body>
</html>
<?php /**PATH /var/www/laravel/resources/views/reportes/vehiculos_reparacion.blade.php ENDPATH**/ ?>