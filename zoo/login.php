<?php
// Incluir conexión a la base de datos
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role']; // admin o visitante
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Escapar los datos de entrada para evitar inyecciones SQL
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    if ($role === "admin") {
        // Consultar la tabla 'admin'
        $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    } else {
        // Consultar la tabla 'visitas'
        $query = "SELECT * FROM visitas WHERE username = '$username' AND password = '$password'";
    }

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        if ($role === "admin") {
            header("Location: admin_dashboard.php"); // Redirigir al panel de administrador
        } else {
            header("Location: visit_dashboard.php"); // Redirigir al panel de visitante
        }
        exit();
    } else {
        // Credenciales incorrectas
        echo "<script>
                alert('Usuario o contraseña incorrectos.');
                window.location.href = 'index.php';
              </script>";
    }
}
?>
