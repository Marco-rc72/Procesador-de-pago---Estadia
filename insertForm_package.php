<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
include ('config/database.php');
?>
    <form action="database\insert\insert_package.php" method="post">
    <div>
        <label >Insertar nombre paquete</label>
        <input name="name_package" type="text">
        <label >Insertar precio</label>
        <input name="price" type="number">
    </div>
    <button type="submit">Agregar</button>
    <!-- Beneficio -->
    <div class="">
        <select name="id_benefits[]" class="" multiple>
            <option value="">Elige un beneficio</option>
            <?php
            // Obtener el  de clasificaciones
            $sql = "SELECT * FROM benefits";
            $result = $conn->query($sql);   

            while ($fila = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $fila['id_benefits'] ?>"><?php echo $fila['name_benefits'] ?></option>
            <?php } ?>
        </select>
        <label class="">Beneficios</label>
    </div>
</form>
</body>
</html>

