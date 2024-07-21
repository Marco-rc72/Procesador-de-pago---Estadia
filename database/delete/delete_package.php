<?php

print_r($_GET);

$idPackage = $_GET['id_package'];

include ('../../config/database.php');

$consulta = "DELETE FROM package WHERE id_package = '$idPackage' ";
if ($conn->query($consulta) === FALSE){
    echo "Error eliminando el beneficio" .$conn->error;
    exit;
}

$relacion = "DELETE FROM package_benefits WHERE id_package = '$idPackage' ";
if ($conn->query($relacion) === FALSE){
    echo "Error eliminando el beneficio" .$conn->error;
    exit;
}

header('Location: ../../panelControl_paquetes.php');

?>
