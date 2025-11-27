<?php
include "conexion.php";
$id = $_GET['id'];

$conexion->query("DELETE FROM usuarios WHERE id=$id"); // Ejecutar la consulta de eliminación
header("Location: listado.php"); // Redirigir al listado después de eliminar
?>
