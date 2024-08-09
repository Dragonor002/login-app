<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.ytimg.com/vi/Jvuj6Tr3K5k/maxresdefault.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background: rgba(0, 0, 0, 0.6); /* Fondo negro con opacidad para mejorar la legibilidad */
            border-radius: 8px;
            padding: 20px;
        }

        a {
            color: #00f;
            font-size: 1.5rem;
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #00f;
            border-radius: 5px;
            background-color: rgba(0, 0, 0, 0.8); /* Fondo oscuro para el botón */
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #00f;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="index.php">Volver al Login</a>
    </div>
</body>
</html>
