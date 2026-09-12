<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    echo "Nombre recibido: " . htmlspecialchars($name);
    echo "<br>";
    echo "Correo recibido: " . htmlspecialchars($email);
    echo "<br>";
    echo "Contraseña recibida: " . strlen($password) . " caracteres";
}