<?php
include_once "../../Ingreso tienda/php/Conexion.php";

// Recoger datos del formulario
$Nombre_comprador = $_POST['nombre-comprador'];
$documento_comprador = $_POST['documento-comprador'];
$direccion_entrega = $_POST['direccion-entrega'];
$forma_pago = $_POST['forma-pago'];
$id = $_POST['id-compra'];

// Consulta SQL para insertar datos en la base de datos
$insertar = "INSERT INTO Compra (nombre_comprador, documento_comprador, direccion_entrega, forma_pago, id_producto) 
            VALUES ('$Nombre_comprador', '$documento_comprador', '$direccion_entrega', '$forma_pago', '$id')";

// Ejecutar la consulta
$resultado = mysqli_query($conectar, $insertar);

// Verificar si la consulta se ejecutó correctamente
if (!$resultado) {
    echo '<script> alert("Error al Registrar"); window.location.href = "../Registra producto.php"</script>';
} else {
    echo '<script> alert("Registro exitoso"); window.location.href = "../Registra producto.php"</script>';
}

// Cerrar la conexión a la base de datos
mysqli_close($conectar);
?>
