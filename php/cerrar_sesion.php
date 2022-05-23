<?php

include("conexion.php");

$consulta3 = ("UPDATE usuarios SET sesion = 0 WHERE sesion = 1");
$resultado = mysqli_query($conex, $consulta3);
?>