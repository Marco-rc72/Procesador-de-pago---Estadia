<?php

include('../config/database.php');

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

    // Obtener el nombre del paquete del frontend
    $name_package = $datos['namePackage'];

    // Preparar y ejecutar la consulta para insertar en la tabla compra
    $sql = $conn->prepare("INSERT INTO compra (id_transaccion, fecha, status, email, id_client, total) VALUES (?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssssd", $id_transaccion, $fecha_nueva, $status, $email, $id_client, $monto);

    
    if ($sql->execute()) {
        // Obtener el último id de compra insertado
        $id_compra = $conn->insert_id;
        
        // Preparar y ejecutar la consulta para insertar en detalle_compra
        $sql_detalle = $conn->prepare("INSERT INTO detalle_compra (id_compra, name_package, price) VALUES (?, ?, ?)");
        $sql_detalle->bind_param("isd", $id_compra, $name_package, $monto);
        
        
        if ($sql_detalle->execute()) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => $sql_detalle->error]);
        }
    // include ('enviar_email.php');
    } else {
        echo json_encode(['status' => 'error', 'message' => $sql->error]);
    } 
}
$conn->close();

?>