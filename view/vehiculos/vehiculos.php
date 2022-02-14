<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php echo $data["Titulo"] ?>
  </title>
</head>

<body>
  <h1>
    <?php echo $data["Titulo"] ?>
  </h1>

  <table border="1">
    <thead>
      <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Anio</th>
        <th>Color</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($data["Vehiculos"] as $vehiculo) { ?>
        <tr>
          <td><?php $vehiculo["placa"] ?></td>
          <td><?php $vehiculo["marca"] ?></td>
          <td><?php $vehiculo["modelo"] ?></td>
          <td><?php $vehiculo["anio"] ?></td>
          <td><?php $vehiculo["color"] ?></td>
          <td>
            <button href="index.php?vehiculos&@update&id=<?php echo $dato["id"] ?>" class="btn btn-warning">Modificar</button>
            <button href="index.php?vehiculos&@delete&id=<?php echo $dato["id"] ?>" class="btn btn-warning">Eliminar</button>
            button
          </td>
        </tr>
      <?php } ?>


    </tbody>
  </table>

</body>

</html>