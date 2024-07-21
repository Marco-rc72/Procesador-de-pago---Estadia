<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/panelControl.css">
    </head>
<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <?php

    $idBeneficio = $_GET['id_benefits'];
    include ('config/database.php');

    $consulta = "SELECT * FROM benefits WHERE id_benefits = '$idBeneficio' ";

    $query = mysqli_query($conn, $consulta);

    $fila = mysqli_fetch_array($query);
    ?>
    <form action="database\update\update_benefits.php" method="post">
        <h4>Actualiza el beneficio seleccionado</h4>
        <div>
            <label >Nombre del beneficio</label>
            <input name="name_benefits" value="<?php echo $fila['name_benefits'] ?>" class="inputs" type="text">
        </div>
        <input type="hidden" name="id_benefits" value="<?php echo $fila['id_benefits'] ?>">
        <br>
        <button type="submit" class="boton">Agregar</button>
        <button class="boton" onclick="window.history.back()">Cancel</button>
    </form>
</body>
</html>