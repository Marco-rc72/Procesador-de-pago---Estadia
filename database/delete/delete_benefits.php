<?php

print_r($_GET);

$idBeneficio = $_GET['id_benefits'];

include ('../../config/database.php');

$consulta = "DELETE FROM benefits WHERE id_benefits = '$idBeneficio' ";
if ($conn->query($consulta) === FALSE){
    echo "Error eliminando el beneficio" .$conn->error;
    exit;
}

$relacion = "DELETE FROM package_benefits WHERE id_benefits = '$idBeneficio' ";
if ($conn->query($relacion) === FALSE){
    echo "Error eliminando el beneficio" .$conn->error;
    exit;
}



header('Location: ../../panelControl_beneficios.php');

?>
