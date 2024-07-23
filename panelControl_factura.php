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
        <h1>Tabla Compras</h1>
        <div class="contenedor">
            <table>
                <thead>
                    <tr>
                        <th>#Factura</th>
                        <th>Fecha</th>
                        <th>#Paquete</th>
                        <th>#Usuario</th>
                        <th>#Metodo de pago</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $consulta = "SELECT p.id_compra p.name_package, p.price
                FROM detalle_compra p JOIN compra pb ON p.id_compra = pb.id ";
                $resultado = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($resultado)) { 
                ?>
                    <tr>
                        <td class="counter"></td>
                        <td><?php echo $fila['name_package'] ?></td>
                        <td><?php echo $fila['name_package'] ?></td>
                        <td><?php echo $fila['price'] ?></td>
                        <td>
                            <div>
                                <a href="">Mostrar</a>
                            </div>
                        </td>
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