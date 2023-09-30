<?php

include_once "Conexion.php";

$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Documento = $_POST['documento'];
$Contrasena = $_POST['contrasena'];
$Contrasena2 = $_POST['contrasena2'];
$FechaNacimiento = $_POST['fecha'];
$Telefono = $_POST['telefono'];

$validarUser = "SELECT * From Registro WHERE documento = '$Documento'";

$resultadoUser = mysqli_query($conectar,$validarUser);

$numeroregistros = mysqli_num_rows($resultadoUser);

if ($numeroregistros>0) {
    echo '<script> alert("El usuario ya esta registrado"); window.location.href = "../index.php";</script>';
    
}else{

    if ($Contrasena != $Contrasena) {
        echo '<script> alert("No coincide la contraseña") window.location.href = "../index.php";</script>';
    }else{
        $insertar = "INSERT INTO Registro(nombre, apellido, documento, contrasena, fecha, telefono) VALUES ('$Nombre','$Apellido','$Documento','$Contrasena','$FechaNacimiento','$Telefono')";
        
        $resultado = mysqli_query($conectar,$insertar);

        if (!$resultado){
            echo '<script> alert("Error al Registrar"); window.location.href = "../index.php"</script>';
        }else{
            echo  '<script> alert("Registro exitoso"); window.location.href = "../index.php"</script>';
        }
    }
}

mysqli_close($conectar);

?>