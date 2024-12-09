<?php
$servername = "localhost";
$username = "root";
$password = ""; // Cambiar según tu configuración
$dbname = "zoo";

$conn = new mysqli($localhost, $root, , $zoo);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
