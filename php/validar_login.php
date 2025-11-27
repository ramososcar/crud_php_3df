<?php
session_start();
include "conexion.php";

$correo = $_POST['correo']; // Obtener el correo del formulario
$password = MD5($_POST['password']); // Obtener y encriptar la contraseña del formulario

$query = "SELECT * FROM usuarios WHERE correo='$correo' AND password='$password'";
$consulta = $conexion->query($query); // Ejecutar la consulta

if ($consulta->num_rows > 0) {
    $_SESSION['usuario'] = $correo;
    header("Location: login.php"); // Redirigir a la página de login
} else {
    echo "Datos incorrectos"; // Mostrar mensaje de error
}
?>
