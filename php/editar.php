<?php
include "conexion.php";
$id = $_GET['id']; // Obtener el ID del usuario a editar

$datos = $conexion->query("SELECT * FROM usuarios WHERE id=$id")->fetch_assoc(); // Obtener los datos actuales del usuario
?>

<form action="" method="POST">
    <input type="text" name="nombre" value="<?= $datos['nombre'] ?>" required>
    <input type="email" name="correo" value="<?= $datos['correo'] ?>" required>
    <button type="submit" name="actualizar">Actualizar</button>
</form>

<?php
if (isset($_POST['actualizar'])) { // Verificar si se ha enviado el formulario
    $nombre = $_POST['nombre']; // Obtener el nuevo nombre
    $correo = $_POST['correo']; // Obtener el nuevo correo

    $conexion->query("UPDATE usuarios SET nombre='$nombre', correo='$correo' WHERE id=$id"); // Actualizar los datos del usuario
    header("Location: listado.php"); // Redirigir al listado después de actualizar
}
?>
