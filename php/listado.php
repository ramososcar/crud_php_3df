<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
}

include "conexion.php";
$datos = $conexion->query("SELECT * FROM usuarios"); // Obtener todos los usuarios de la base de datos
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<div class="container">
    <h1>Usuarios Registrados</h1>
<a href="logout.php" class="btn-danger logout-btn"><button>Cerrar Sesión</button></a>
    <a href="crear.php">
        <button class="btn-success">Crear Usuario</button>
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $datos->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td><?= $row['correo'] ?></td>
                <td class="actions">
                    <a class="edit" href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    <a class="delete" href="eliminar.php?id=<?= $row['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>