<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Animal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('fondo.jpg'); /* Asegúrate de tener un archivo de fondo */
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .main-container {
            width: 100%;
            max-width: 600px;
            margin-right: 50px auto;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .text-container{
            align-content: right;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select, button {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .link {
            text-align: center;
        }
        .link a {
            color: #007bff;
            text-decoration: none;
        }
        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mundo Animal</h1>
        <form method="POST" action="login.php">
            <label for="role">Tipo de usuario:</label>
            <select name="role" id="role" required>
                <option value="admin">Visitante</option>
                <option value="visitante">Administrador</option>
            </select>

            <label for="username">Usuario:</label>
            <input type="text" name="username" id="username" placeholder="Ingresa tu usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Ingresa tu contraseña" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <div class="link">
            <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
