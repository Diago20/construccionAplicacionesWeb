<?php

$LOCALHOST = "localhost";
$USERNAME = "root";
$BDPASWORD = "";
$BDNAME = "Viernes";

$conectar = mysqli_connect($LOCALHOST , $USERNAME, $BDPASWORD, $BDNAME);

if (!$conectar) {
  echo "Erroro al conectar la base de BD";
}

?>