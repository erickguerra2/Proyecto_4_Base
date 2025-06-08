<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel del Taller</title>
    <style>
        .autosContainer {
            background-color: #d3d4ce;
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
            overflow-y: auto;
        }

        .autosTitle {
            font-size: 2.8rem;
            margin: 2rem 0 1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 1rem;
            color: #1a3c40;
        }

        .gridReportes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            width: 100%;
            max-width: 1100px;
            padding: 1rem;
        }

        .reporteCard {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem 1rem;
            text-align: center;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
        }

        .reporteCard:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background-color: #f9fafc;
        }

        .reporteCard h3 {
            color: #1a3c40;
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        .icon {
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <div class="autosContainer">
        <h1 class="autosTitle">📋 Panel del Taller</h1>

        <section class="gridReportes">
            @foreach ([
                ['ruta' => route('reportes.vehiculos'), 'titulo' => '🚗 Órdenes con Detalle'],
                ['ruta' => route('reportes.facturacion'), 'titulo' => '📄 Facturas Emitidas'],
                ['ruta' => route('reportes.servicios'), 'titulo' => '📝 Bitácora de Cambios'],
            ] as $reporte)
                <a href="{{ $reporte['ruta'] }}" class="reporteCard">
                    <h3>{{ $reporte['titulo'] }}</h3>
                </a>
            @endforeach
        </section>

        <h2 class="autosTitle" style="margin-top: 4rem;">🗂️ Gestión de Datos</h2>

        <section class="gridReportes">
            @foreach ([
                ['ruta' => '/clientes', 'titulo' => '👤 Gestión de Clientes'],
                ['ruta' => '/vehiculos', 'titulo' => '🚘 Gestión de Vehículos'],
            ] as $item)
                <a href="{{ $item['ruta'] }}" class="reporteCard">
                    <h3>{{ $item['titulo'] }}</h3>
                </a>
            @endforeach
        </section>
    </div>
</body>
</html>
