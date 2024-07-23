<?php
include ('config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/estilos.css"> -->
    <link rel="stylesheet" href="css/panelControl.css">
    <link href="assets/img/img_nav.png">    
</head>
<body>
    <?php
    include 'includes/navbar.php';
    ?>
        <h1>Tabla Detalle de la compra</h1>
        <div class="contenedor">
            <table>
                <tr>
                    <th>Id_compra</th>
                    <th>Nombre del paquete</th>
                    <th>Precio</th>
                </tr>
                <tbody>
            <?php
            $consulta = "SELECT * FROM detalle_compra";    
            $resultado = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($resultado)) { 
                ?>
            <tr>
                <td><?php echo $fila['id_compra'] ?></td>
                <td><?php echo $fila['name_package'] ?></td>
                <td><?php echo $fila['price'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
            </table>
        </div>
    <?php
include 'includes/footer.php';
?>
</body>
</html>