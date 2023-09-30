<?php
    include_once 'Conexion.php';
    if(isset($_POST['actualizar'])){
        $Nombre = $_POST['nombre'];
        $Apellido = $_POST['apellido'];
        $Documento = $_POST['documento'];
        $FechaNacimiento = $_POST['fecha'];
        $Telefono = $_POST['telefono'];

        $modificar = "UPDATE registro SET nombre='".$Nombre."', apellido='".$Apellido."', documento='".$Documento."',  fecha='".$FechaNacimiento."', telefono='".$Telefono."' WHERE  documento = '".$Documento."'";

        $resultado = mysqli_query($conectar, $modificar);
        if(!$resultado){
            echo "<script>alert('Error al editar!'); window.location.href='../listado.php';</script>";
            
        }else{
            echo "<script>alert('Registro Editado con éxito!'); window.location.href='../listado.php';</script>";
        }
    }
    else{
        $id=$_GET['documento'];
        $sql = "SELECT * FROM registro WHERE documento ='".$id."'";
        $resultado = mysqli_query($conectar, $sql);
        $fila = mysqli_fetch_assoc($resultado);
        $Nombre = $fila['nombre'];
        $Apellido = $fila['apellido'];
        $Documento = $fila['documento'];
        $FechaNacimiento = $fila['fecha'];
        $Telefono = $fila['telefono'];
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
    <a href="../listado.php"><button id="volver">Volver Listado</button></a>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">

            <h2>Editar Registro Usuario</h2>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $Nombre;?>" required>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" value="<?php echo $Apellido;?>" required>
        
        <label for="documento">Documento de identidad:</label>
        <input type="documento" id="documento" name="documento" value="<?php echo $Documento;?>" required>

        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" id="fecha" name="fecha" value="<?php echo $FechaNacimiento;?>">
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" value="<?php echo $Telefono;?>">
        
        <button type="submit" name="actualizar">Enviar</button>

    </form>
</body>
</html>