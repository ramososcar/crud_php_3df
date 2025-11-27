<?php
session_start();

// Si no hay sesión activa, vuelve al login
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<div class="login-container">
    <h2>Bienvenido</h2>
    <p>Has iniciado sesión como: <strong><?php echo $_SESSION['usuario']; ?></strong></p>

    <a href="listado.php">
        <button>Ir al CRUD</button>
    </a>

    <br><br>

    <a href="logout.php">
        <button style="background:#dc3545;">Cerrar Sesión</button>
    </a>
</div>

</body>
</html>
