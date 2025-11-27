<?php include "conexion.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<div class="container">

    <h2>Crear Nuevo Usuario</h2>

    <form action="" method="POST" class="form-card">

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingresa el nombre" required>

        <label for="correo">Correo</label>
        <input type="email" name="correo" placeholder="Ingresa el correo" required>

        <label for="password">Contraseña</label>
        <input type="password" name="password" placeholder="Ingresa la contraseña" required>

        <button type="submit" name="guardar" class="btn-success">Guardar Usuario</button>

        <a href="listado.php" class="btn-back">⬅ Volver al Listado</a>
    </form>

</div>

</body>
</html>

<?php
if (isset($_POST['guardar'])) { // Verifica si se ha enviado el formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = MD5($_POST['password']);
// Inserta el nuevo usuario en la base de datos
    $conexion->query("INSERT INTO usuarios VALUES (NULL, '$nombre', '$correo', '$password')");
    header("Location: listado.php"); // Redirige al listado después de guardar
}
?>
