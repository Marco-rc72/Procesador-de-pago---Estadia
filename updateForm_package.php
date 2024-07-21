<?php
$idPaquete = $_GET['id_package'];
include ('config/database.php');

$consulta = "SELECT p.id_package ,p.name_package, p.price, b.name_benefits 
            FROM package p JOIN package_benefits pb ON p.id_package = pb.id_package 
            JOIN benefits b ON b.id_benefits = pb.id_benefits;";
$resultado = mysqli_query($conn, $consulta);
$paquete = mysqli_fetch_array($resultado)
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
    <form action="database\update\update_package.php" method="post">
        <h4>Actualizar paquete</h4>
    <div>
        <label> Nombre paquete</label>
        <input name="name_package" value="<?php echo $paquete['name_package'] ?>" class="inputs" type="text" placeholder="">
        <label >Insertar precio</label>
        <input name="price" value="<?php echo $paquete['price'] ?>" class="inputs" type="number">
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
    <input name="id_package" value="<?php echo $paquete['id_package'] ?>" type="hidden">
    <button type="submit" class="boton">Agregar</button>
</form>
</body>
</html>

