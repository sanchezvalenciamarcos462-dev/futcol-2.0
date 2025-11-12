<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "futcol";  // Asegúrate de que este nombre coincida con tu base de datos

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>