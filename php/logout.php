<?php
session_start();
session_destroy();      // elimina la sesión completa
header("Location: ../index.html"); // redirige al usuario a la página de inicio
exit(); 
?>
