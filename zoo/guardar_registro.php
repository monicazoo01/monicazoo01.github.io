<?php
// Incluir el archivo de conexión
include 'conexion.php'; // Asegúrate de que el archivo esté en el mismo directorio

// Recibir datos del formulario
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hashear la contraseña
$userType = $_POST['user-type']; // Será "visitor" por defecto

// Preparar la consulta
$sql = "INSERT INTO usuarios (username, email, password, user_type) VALUES (?, ?, ?, ?)";

// Usar una declaración preparada para evitar inyecciones SQL
$stmt = $conn->prepare($sql);
if ($stmt) {
    $stmt->bind_param("ssss", $username, $email, $password, $userType); // Enlazar parámetros

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error al registrar el usuario: " . $stmt->error . "'); window.history.back();</script>";
    }

    // Cerrar la declaración
    $stmt->close();
} else {
    echo "Error en la preparación de la consulta: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
