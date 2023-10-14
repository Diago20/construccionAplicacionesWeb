<?php
include_once 'Conexion.php';
$id = isset($_GET['id']) ? $_GET['id'] : 2; // Define un valor predeterminado si 'id' no está definido.

if (isset($_POST['actualizar'])) {
    $Nombre_tienda = $_POST['nombre-tienda'];
    $tipo_producto = $_POST['tipo-producto'];
    $nombre_producto = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['valor'];

    if ($_FILES['imagen-referencia']['tmp_name']) {
        // Se proporcionó una nueva imagen
        $nombre_archivo = $_FILES['imagen-referencia']['name'];
        $archivo_temporal = $_FILES['imagen-referencia']['tmp_name'];
        $ruta_destino = "carpeta_destino/" . $nombre_archivo;

        // Mover la nueva imagen a la carpeta de destino
        move_uploaded_file($archivo_temporal, $ruta_destino);

        // Actualizar la referencia de la imagen en la base de datos
        $modificar = "UPDATE Producto SET nombre_tienda = '$Nombre_tienda', tipo_producto = '$tipo_producto', nombre_producto = '$nombre_producto', descripcion = '$descripcion', valor = '$valor', imagen = '$ruta_destino' WHERE id = '$id'";
    } else {
        // No se proporcionó una nueva imagen, solo actualizar otros campos
        $modificar = "UPDATE Producto SET nombre_tienda = '$Nombre_tienda', tipo_producto = '$tipo_producto', nombre_producto = '$nombre_producto', descripcion = '$descripcion', valor = '$valor' WHERE id = '$id'";
    }

    // Ejecutar la consulta SQL de actualización
    $resultado = mysqli_query($conectar, $modificar);

    if (!$resultado) {
        echo "<script>alert('Error al editar!'); window.location.href='../listado.php';</script>";
    } else {
        echo "<script>alert('Registro Editado con éxito!'); window.location.href='../listado.php';</script>";
    }
}else {
    $id = isset($_GET['id']) ? $_GET['id'] : 0; // Define un valor predeterminado si 'id' no está definido.
    $sql = "SELECT * FROM Producto WHERE id ='" . $id . "'";
    $resultado = mysqli_query($conectar, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    $Nombre_tienda = $fila['nombre_tienda'];
    $tipo_producto = $fila['tipo_producto'];
    $nombre_producto = $fila['nombre_producto'];
    $descripcion = $fila['descripcion'];
    $valor = $fila['valor'];
    $imagen = $fila['imagen'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="../Style/index.css">
</head>

<body>
    <a href="../Productos.php"><button id="volver">Volver Listado</button></a>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">

        <h2>Editar Registro Usuario</h2>

        <label for="nombre-tienda">Nombre Tienda o vendedor:</label>
        <input type="text" id="nombre-tienda" name="nombre-tienda" value="<?php echo $Nombre_tienda; ?>" required>

        <label for="tipo-producto">Tipo de producto:</label>
        <input type="text" id="tipo-producto" name="tipo-producto" value="<?php echo $tipo_producto; ?>" required>

        <label for="nombre">Nombre Producto:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre_producto; ?>" required>

        <label for="descripcion">Descripcion Producto:</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" required>

        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" value="<?php echo $valor; ?>" required>

        <label for="imagen-referencia">Imagen de referencia:</label>
        <img src="<?php echo $imagen; ?>" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
        <input type="file" id="imagen-referencia" name="imagen-referencia">

        <button type="submit">Enviar</button>

    </form>
</body>

</html>