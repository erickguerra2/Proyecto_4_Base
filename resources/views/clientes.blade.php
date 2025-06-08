<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gestión de Clientes</title>
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
    <h2 class="autosTitle">Gestión de Clientes</h2>

    <div class="autosPrincipal">
      <form>
        <input type="text" placeholder="Nombre">
        <input type="email" placeholder="Email">
        <input type="text" placeholder="Teléfono">
        <input type="text" placeholder="Dirección">
        <select>
          <option value="Particular">Particular</option>
          <option value="Empresa">Empresa</option>
        </select>
        <button type="submit" class="filtro">Agregar Cliente</button>
      </form>

      <table class="tabla">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Tipo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan Pérez</td>
            <td>juan@mail.com</td>
            <td>123456789</td>
            <td>Calle Falsa 123</td>
            <td>Particular</td>
            <td>
              <a href="#" class="filtro">Editar</a>
              <button class="filtro">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Empresa XYZ</td>
            <td>contacto@xyz.com</td>
            <td>987654321</td>
            <td>Av. Central 456</td>
            <td>Empresa</td>
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
