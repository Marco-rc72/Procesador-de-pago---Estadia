<?php

print_r($_POST);

$nombreBeneficio = $_POST['name_benefits'];
$idBeneficio = $_POST['id_benefits'];

include ('../../config/database.php');

$consulta = "UPDATE benefits 
SET name_benefits = '$nombreBeneficio' 
WHERE id_benefits = '$idBeneficio' ";

$query = mysqli_query($conn, $consulta);

header('Location: ../../panelControl_beneficios.php');

?>
