<?php
include ('config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/panelControl.css">
</head>
<body>
<?php
    include 'includes/navbar.php';
    ?>
    <form action="database\insert\insert_package.php" method="post">
        <h4>Agregar paquete</h4>
    <div>
        <label> Nombre paquete</label>
        <input name="name_package" class="inputs" type="text" placeholder="">
        <label >Insertar precio</label>
        <input name="price" class="inputs" type="number">
    </div>
    
    <!-- Beneficio -->
    <div class="">
        <label for="">Beneficios</label>
        <select name="id_benefits[]" class="selection" multiple>
            <option value="" disabled selected>Elige un beneficio</option>
            <?php
            // Obtener el  de clasificaciones
            $sql = "SELECT * FROM benefits";
            $result = $conn->query($sql);   

            while ($fila = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $fila['id_benefits'] ?>"><?php echo $fila['name_benefits'] ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="boton">Agregar</button>
</form>
</body>
</html>

