<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/index.css">
    <title>Formulario </title>
</head>
<body>
    <form action="./php/registro.php" method = "post">
        <h2>Formulario</h2>
        
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        
        <label for="documento">Documento de identidad:</label>
        <input type="documento" id="documento" name="documento" required>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        
        <label for="contrasena2">Repite Contraseña:</label>
        <input type="password" id="contrasena2" name="contrasena2" required>

        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" id="fecha" name="fecha">
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono">
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

