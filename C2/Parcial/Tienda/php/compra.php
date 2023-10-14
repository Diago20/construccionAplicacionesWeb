<?php
include_once '../../Ingreso tienda/php/Conexion.php';

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

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="compra.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <form class="form" action="registro_compra.php" enctype="multipart/form-data" method="post">

        <h2>Registro de compra</h2>

        <input type="text" id="id-compra" name="id-compra" value="<?php echo $id; ?>" hidden readonly>

        <label for="nombre-tienda">Nombre Tienda o vendedor:</label>
        <input type="text" id="nombre-tienda" name="nombre-tienda" value="<?php echo $Nombre_tienda; ?>" readonly>

        <label for="nombre">Nombre Producto:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre_producto; ?>" readonly>

        <label for="descripcion">Descripcion Producto:</label>
        <input type="text" id="descripcion" name="descripcion" value="<?php echo $descripcion; ?>" readonly>

        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" value="<?php echo $valor; ?>" readonly>

        <img src="<?php echo "../../Ingreso tienda/Imagenes_recibidas/". $imagen; ?>" id="imagen" alt="Imagen actual" style="max-width: 100px; max-height: 100px;">
        <br>
        <label for="nombre">Nombre comprador:</label>
        <input type="text" name="nombre-comprador">
        <label for="documento">Documento:</label>
        <input type="number" name="documento-comprador">
        <label for="direccion">Direccion de entrega:</label>
        <input type="text" name="direccion-entrega">
        <label for="Forma de pago">Forma de pago</label>
        <select class="form-select" id="select-registra" name="forma-pago" required>
            <option selected>Abrir menu de opciones</option>
            <option value="PSE">PSE</option>
            <option value="TC">TC</option>
            <option value="Paypal">Paypal</option>
            <option value="Efectivo">Efectivo</option>
        </select>
        <button class="btn bg-danger button" type="submit">Comprar</button>

    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>