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
    <h1>Compra</h1>
    <table>
        <tr>
            <th>Id_transaccion</th>
            <th>Fecha</th>
            <th>Status</th>
            <th>Correo electronico</th>
            <th>Id_Cliente</th>
        </tr>
        <tbody>
            <?php
            $consulta = "SELECT * FROM compra";    
            $resultado = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($resultado)) { 
                ?>
            <tr>
                <td><?php echo $fila['id_transaccion'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
                <td><?php echo $fila['status'] ?></td>
                <td><?php echo $fila['email'] ?></td>
                <td><?php echo $fila['id_client'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
include 'includes/footer.php';
?>
</body>
</html>