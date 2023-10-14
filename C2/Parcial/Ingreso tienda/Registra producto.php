<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Formulario </title>
</head>

<body>
    <a href="Productos.php"><button class="btn btn-danger">Ver mis productos</button></a>

    <form action="./php/registro.php" enctype="multipart/form-data" method="post">
        <h2>Formulario Producto</h2>

        <label for="nombre-tienda">Nombre Tienda o vendedor:</label>
        <input type="text" id="nombre-tienda" name="nombre-tienda" required>

        <label for="tipo-producto">Tipo de producto:</label>
        <select class="form-select" id="select-registra" name="tipo-producto" required>
            <option selected>Abrir menu de opciones</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Ropa">Ropa</option>
            <option value="Comida">Comida</option>
            <option value="Hogar">Hogar</option>
        </select>

        <label for="nombre">Nombre Producto:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Marca y modelo, ejemplo Zapatos Nike Z500" required>

        <label for="descripcion">Descripcion Producto:</label>
        <input type="text" id="descripcion" name="descripcion" placeholder="Tamaño, color, referencias, etc..." required>

        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor" required>

        <label for="imagen-referencia">Imagen de referencia:</label>
        <input type="file" id="imagen-referencia" name="imagen-referencia" required>

        <button type="submit" class="btn btn-outline-danger m-4 btn-lg">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>