<?php
$conexion = new mysqli("localhost", "root", "", "crudtpfinal_db");
//conexión a la base de datos
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}// mensaje de error en caso de que falle la conexión
?>
