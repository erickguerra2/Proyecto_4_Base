<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bitácora de Cambios</title>
  <style>
    body, input, select, button {
      font-family: 'Segoe UI', sans-serif;
    }

    .autosContainer {
      background-color: #d3d4ce;
      min-height: 100vh;
      width: 100vw;
      padding-top: 1.1rem;
      padding-right: 2.5rem;
      box-sizing: border-box;
      overflow: hidden;
    }

    .autosTitle {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      text-align: center;
      color: #0e3f41;
    }

    .autosPrincipal {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.5rem;
      width: 100%;
      max-width: calc(100% - 60px);
      margin: 0 auto;
    }

    .tabla {
      margin-top: 20px;
      width: calc(100% - 60px);
      border-collapse: collapse;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      color: black;
      margin-left: auto;
      margin-right: auto;
    }

    .tabla th, .tabla td {
      padding: 14px;
      border: 1px solid #ddd;
      text-align: left;
    }

    .tabla th {
      background-color: #f0f4f3;
      color: #333;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="autosContainer">
    <h2 class="autosTitle">Bitácora de Cambios en Órdenes</h2>
    <div class="autosPrincipal">
      <table class="tabla">
        <thead>
          <tr>
            <th>Tabla Afectada</th>
            <th>ID Registro</th>
            <th>Acción</th>
            <th>Fecha</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cambios as $c)
            <tr>
              <td>{{ $c->tabla_afectada }}</td>
              <td>{{ $c->id_registro }}</td>
              <td>{{ $c->accion }}</td>
              <td>{{ $c->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
