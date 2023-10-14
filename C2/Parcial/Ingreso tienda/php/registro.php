<?php
include_once "Conexion.php";

$Nombre_tienda = $_POST['nombre-tienda'];
$tipo_producto = $_POST['tipo-producto'];
$nombre_producto = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$valor = $_POST['valor'];

$nombre_archivo = $_FILES['imagen-referencia']['name'];
$archivo_temporal = $_FILES['imagen-referencia']['tmp_name'];


$ruta_destino = "../Imagenes_recibidas/" . $nombre_archivo;


if (move_uploaded_file($archivo_temporal, $ruta_destino)) {
    $insertar = "INSERT INTO Producto(nombre_tienda, tipo_producto, nombre_producto, descripcion, valor, imagen) 
                VALUES ('$Nombre_tienda','$tipo_producto','$nombre_producto','$descripcion','$valor','$ruta_destino')";

    $resultado = mysqli_query($conectar, $insertar);

    if (!$resultado) {
        echo '<script> alert("Error al Registrar"); window.location.href = "../Registra producto.php"</script>';
    } else {
        echo  '<script> alert("Registro exitoso"); window.location.href = "../Registra producto.php"</script>';
    }
} else {
    echo '<script> alert("Error al subir la imagen");"</script>';
}

mysqli_close($conectar);
