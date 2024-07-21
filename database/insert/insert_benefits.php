<?php

// print_r($_POST);

$nombreBeneficio = $_POST['name_benefits'];

include ('../../config/database.php');

$consulta = "INSERT INTO benefits (name_benefits) VALUE ('$nombreBeneficio')";

$resultado = mysqli_query($conn, $consulta);

header('Location: ../../panelControl_beneficios.php');

?>