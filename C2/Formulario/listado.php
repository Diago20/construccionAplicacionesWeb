<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Usuarios</title>
    <link rel="stylesheet" href="Style/listado.css">
</head>
  <body>
    <h1>Listado de usuarios registrados</h1>
        
    <table>
      <thead>
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Fecha de nacimiento</th>
        <th>Telefono</th>
        <th>Acciones</th>
      </thead>

      <?php

      include_once 'php/Conexion.php';
      $consultarUsuarios = "SELECT * FROM Registro";
      $resultadoUsuarios = $conectar -> query($consultarUsuarios) or die (mysqli_error($conectar));
      while ($fila=$resultadoUsuarios->fetch_assoc()) {
        echo "<tr>";
        echo "<td>"; echo $fila['nombre']; echo "</td>";
        echo "<td>"; echo $fila['apellido']; echo "</td>";
        echo "<td>"; echo $fila['documento']; echo "</td>";
        echo "<td>"; echo $fila['fecha']; echo "</td>";
        echo "<td>"; echo $fila['telefono']; echo "</td>";
        echo "<td id='acciones'><a href='php/eliminar.php?documento=" .$fila['documento']."'> <img id='eliminar' src='Images/eliminar.png' title='Eliminar' alt='Eliminar'></a> <a href='php/editar.php?documento=" .$fila['documento']."'><img src='Images/editar.png' title='Editar' alt='Editar'></a></td>";
      }

      ?>
    </table>
    <a href="index.php"><button>Registrar nuevo usuario</button></a>
  </body>
</html>