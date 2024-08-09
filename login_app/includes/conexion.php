<?php
try {
    $pdo = new PDO('sqlite:/var/www/html/login_app/login_app.db');
    // Habilitar excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
