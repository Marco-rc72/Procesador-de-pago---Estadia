<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "procesador_pago";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida - ERROR de conexión: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// echo "La conexión fue exitosa";
?>
