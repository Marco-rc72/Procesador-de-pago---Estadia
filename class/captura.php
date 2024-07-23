<?php

// Configuración de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "procesador_pago";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$conn->set_charset("utf8");

// Captura de datos desde PayPal
$json = file_get_contents('php://input');
$datos = json_decode($json, true);

if (is_array($datos)) {
    $id_transaccion = $datos['detalles']['id'];
    $monto = $datos['detalles']['purchase_units'][0]['amount']['value'];
    $status = $datos['detalles']['status'];
    $fecha = $datos['detalles']['update_time'];
    $fecha_nueva = date('Y-m-d H:i:s', strtotime($fecha));
    $email = $datos['detalles']['payer']['email_address'];
    $id_client = $datos['detalles']['payer']['payer_id'];

    // Preparar y ejecutar la consulta
    $sql = $conn->prepare("INSERT INTO compra (id_transaccion, fecha, status, email, id_client, total) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssd", $id_transaccion, $fecha_nueva, $status, $email, $id_client, $monto);
   
    if ($sql->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $sql->error]);
    }
}

$conn->close();

?>
