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

      <?php
      foreach ($data["Vehiculos"] as $vehiculo) {
        echo "<tr>";
        echo "<td>" . $vehiculo["placa"] . "</td>";
        echo "<td>" . $vehiculo["marca"] . "</td>";
        echo "<td>" . $vehiculo["modelo"] . "</td>";
        echo "<td>" . $vehiculo["anio"] . "</td>";
        echo "<td>" . $vehiculo["color"] . "</td>";
        echo "<td>";
        echo "<button class='btn'>Modificar</button>";
        echo "<button class='btn'>Eliminar</button>";
        echo "</td>";
        echo "</tr>";
      }
      ?>

    </tbody>
  </table>

</body>

</html>