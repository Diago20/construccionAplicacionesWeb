<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado Usuarios</title>
  <link rel="stylesheet" href="Style/listado.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <h1 class="text-light">Listado de productos registrados</h1>
  <div class="container">
  <table class="border-primary table table-dark table-striped">
    <thead>
      <th>ID</th>
      <th>Nombres Tienda</th>
      <th>Tipo de producto</th>
      <th>Nombre producto</th>
      <th>Descripcion</th>
      <th>Valor</th>
      <th>Imagenes</th>
      <th>Opciones</th>
    </thead>

    <?php

    include_once 'php/Conexion.php';
    $consultarUsuarios = "SELECT * FROM Producto";
    $resultadoUsuarios = $conectar->query($consultarUsuarios) or die(mysqli_error($conectar));
    while ($fila = $resultadoUsuarios->fetch_assoc()) {
      echo "<tr>";
      echo "<td>";
      echo $fila['id'];
      echo "</td>";
      echo "<td>";
      echo $fila['nombre_tienda'];
      echo "</td>";
      echo "<td>";
      echo $fila['tipo_producto'];
      echo "</td>";
      echo "<td>";
      echo $fila['nombre_producto'];
      echo "</td>";
      echo "<td>";
      echo $fila['descripcion'];
      echo "</td>";
      echo "<td>";
      echo $fila['valor'];
      echo "</td>";
      echo "<td><img src='./Imagenes_recibidas/" . $fila['imagen'] . "' alt='Imagen del producto' style='max-width: 100px; max-height: 100px;'></td>";
      echo "<td id='acciones'>
      <a href='php/eliminar.php?id= " . $fila['id'] . "'><i class='bi bi-trash-fill'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
      <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
    </svg></i></a>
      <a href='php/editar.php?id= " . $fila['id'] . "'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
      <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
    </svg></a> 
      </td>";
    }

    ?>
  </table>
  </div>
  <a href="Registra producto.php"><button class="btn btn-danger m-4 btn-lg">Registrar nuevo usuario</button></a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>