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

if ($idPaquete !== '') {
    if ($conn->query($delRelacion) === FALSE) {
        echo "Error eliminando asociaciones de beneficios existentes: " . $conn->error;
        exit;
    }
}

$relacion = "INSERT INTO package_benefits (id_package, id_benefits) VALUES ";
$primIngresado = true;

foreach ($idBeneficios as $idBeneficio) {
    if (!$primIngresado) {
        $relacion .= ", ";
    }
    $relacion .= "($idPaquete, '$idBeneficio')";
    $primIngresado = false;
}

if (count($idBeneficios) > 0) { 
    if ($conn->query($relacion) === FALSE) {
        echo "Error actualizando asociaciones de beneficios: " . $conn->error;
        exit;
    }
}

echo "Paquete actualizado exitosamente!";

header('Location: ../../panelControl_paquetes.php');

?>
