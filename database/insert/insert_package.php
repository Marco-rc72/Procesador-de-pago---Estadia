<?php

// print_r($_POST); // Print form data for debugging (optional)

$nombrePaquete = $_POST['name_package'];
$precio = $_POST['price'];
$beneficios = $_POST['id_benefits'];

include ('../../config/database.php');

// Insert the package and get its ID
$sqlInsertPaquete = "INSERT INTO package (name_package, price)
                    VALUES ('$nombrePaquete', '$precio')";
if ($conn->query($sqlInsertPaquete) === FALSE) {
    echo "Error inserting package: " . $conn->error;
    exit;
}
$idPaquete = $conn->insert_id;

// Prepare the multi-row INSERT statement for benefits
$sqlInsertBeneficios = "INSERT INTO package_benefits (id_package, id_benefits) VALUES ";
$firstRow = true;

// Associate benefits with the inserted package
foreach ($beneficios as $idBeneficio) {
    if (!$firstRow) {
        $sqlInsertBeneficios .= ", ";
    }
    $sqlInsertBeneficios .= "($idPaquete, $idBeneficio)";
    $firstRow = false;
}

// Execute the benefits association INSERT statement
if ($conn->query($sqlInsertBeneficios) === FALSE) {
    echo "Error inserting package benefits: " . $conn->error;
    exit;
} else {
    // Success message (optional)
    echo "Paquete y beneficios insertados exitosamente!";
}

// Close the connection (optional)


// Redirect to insertForm_package.php (optional)
header('Location: ../../panelControl_paquetes.php');

?>
