<?php

$id = $_GET['id'];

include_once 'Conexion.php';
$sentencia = "DELETE FROM `Producto` WHERE `id` = '$id'";
$resultado = $conectar->query($sentencia);

if (!$resultado) {
    die("Error al eliminar: " . mysqli_error($conectar));
} else {
    echo "Registro eliminado correctamente.";
}
mysqli_close($conectar);

?>

<script type="text/javascript">
  alert("Regitro Eliminado!");
  window.location.href='../Productos.php';
</script>