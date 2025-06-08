
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
        }

        .autosTitle {
            font-size: 2.8rem;
            margin-bottom: 2rem;
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
            <?php $__currentLoopData = [
                ['ruta' => '/resultados?tipo=vehiculos_reparacion', 'titulo' => '🚗 Vehículos en Reparación'],
                ['ruta' => '/resultados?tipo=servicios_populares', 'titulo' => '🛠️ Servicios Más Solicitados'],
                ['ruta' => '/resultados?tipo=facturacion_mensual', 'titulo' => '📊 Facturación Mensual'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reporte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($reporte['ruta']); ?>" class="reporteCard">
                    <h3><?php echo e($reporte['titulo']); ?></h3>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>

        <h2 class="autosTitle" style="margin-top: 4rem;">🗂️ Gestión de Datos</h2>

        <section class="gridReportes">
            <?php $__currentLoopData = [
                ['ruta' => '/clientes', 'titulo' => '👤 Gestión de Clientes'],
                ['ruta' => '/vehiculos', 'titulo' => '🚘 Gestión de Vehículos'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['ruta']); ?>" class="reporteCard">
                    <h3><?php echo e($item['titulo']); ?></h3>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>
    </div>
</body>
</html>
<?php /**PATH /var/www/laravel/resources/views/dashboard.blade.php ENDPATH**/ ?>