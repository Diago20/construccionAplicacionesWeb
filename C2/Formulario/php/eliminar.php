<?php

$Documento = $_GET['documento'];

include_once 'Conexion.php';
$sentencia = "DELETE FROM `registro` WHERE `documento` = '$Documento'";
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
  window.location.href='../listado.php';
</script>