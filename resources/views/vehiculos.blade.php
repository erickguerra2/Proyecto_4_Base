<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Vehículos</title>
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

    .filtro {
      padding: 0.5rem 1rem;
      background-color: #748c84;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
    }

    .filtro:hover {
      background-color: #6c9484;
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

    form input, form select {
      padding: 0.6rem;
      border: 1px solid #aaa;
      border-radius: 6px;
      font-size: 1rem;
      background-color: #f7f9f8;
      color: black;
      margin: 5px;
    }
  </style>
</head>
<body>
  <div class="autosContainer">
    <h2 class="autosTitle">Gestión de Vehículos</h2>

    <div class="autosPrincipal">
      <form>
        <input type="text" placeholder="Placa">
        <input type="text" placeholder="Marca">
        <input type="text" placeholder="Modelo">
        <input type="number" placeholder="Año">
        <input type="text" placeholder="Color">
        <select>
          <option value="Sedán">Sedán</option>
          <option value="SUV">SUV</option>
          <option value="Pick_Up">Pick-Up</option>
          <option value="Motocicleta">Motocicleta</option>
        </select>
        <select>
          <option value="1">Juan Pérez</option>
          <option value="2">Empresa XYZ</option>
        </select>
        <button type="submit" class="filtro">Agregar Vehículo</button>
      </form>

      <table class="tabla">
        <thead>
          <tr>
            <th>Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Color</th>
            <th>Tipo</th>
            <th>Cliente</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>ABC123</td>
            <td>Toyota</td>
            <td>Corolla</td>
            <td>2020</td>
            <td>Blanco</td>
            <td>Sedán</td>
            <td>Juan Pérez</td>
            <td>
              <a href="#" class="filtro">Editar</a>
              <button class="filtro">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>XYZ789</td>
            <td>Ford</td>
            <td>Ranger</td>
            <td>2022</td>
            <td>Gris</td>
            <td>Pick-Up</td>
            <td>Empresa XYZ</td>
            <td>
              <a href="#" class="filtro">Editar</a>
              <button class="filtro">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
