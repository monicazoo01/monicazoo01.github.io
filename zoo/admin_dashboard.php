<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Administrador</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?> (Administrador)</h1>
    <p>Esta es tu página de administración.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
