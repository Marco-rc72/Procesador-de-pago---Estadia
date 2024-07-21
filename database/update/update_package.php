<?php

print_r($_POST);

$nombrePaquete = $_POST['name_package'];
$precio = $_POST['price'];
$idBeneficios = $_POST['id_benefits'];
$idPaquete = $_POST['id_package'];

include ('../../config/database.php');

$consulta = "UPDATE package SET name_package = '$nombrePaquete',
price = '$precio'
WHERE id_package = '$idPaquete' ";
if($conn->query($consulta) === FALSE){
    echo "Error actualizando el paquete" .$conn->error;
    exit;
}

$delRelacion = "DELETE FROM package_benefits WHERE id_package = '$idPaquete'";

// Only execute DELETE if there's a package ID
if ($idPaquete !== '') {
    if ($conn->query($delRelacion) === FALSE) {
        echo "Error eliminando asociaciones de beneficios existentes: " . $conn->error;
        exit;
    }
}

// Prepare the INSERT statement for new benefit associations
$relacion = "INSERT INTO package_benefits (id_package, id_benefits) VALUES ";
$primIngresado = true;

foreach ($idBeneficios as $idBeneficio) {
    if (!$primIngresado) {
        $relacion .= ", ";
    }
    $relacion .= "($idPaquete, '$idBeneficio')";
    $primIngresado = false;
}

// Execute the INSERT statement for new benefit associations
if (count($idBeneficios) > 0) { // Check if there are benefits to insert
    if ($conn->query($relacion) === FALSE) {
        echo "Error actualizando asociaciones de beneficios: " . $conn->error;
        exit;
    }
}

// Success message (optional)
echo "Paquete actualizado exitosamente!";

header('Location: ../../panelControl_paquetes.php');

?>
