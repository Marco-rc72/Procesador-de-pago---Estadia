<?php
include ('database/conexion.php');
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
    <h1>Tabla Paquetes</h1>
    <p class="boton-agregar"><a href="">Agregar</a></p>
    <table>
        <thead>
            <tr>
                <th>#Paquete</th>
                <th>Nombre del paquete</th>
                <th>Detalles del paquete</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT * FROM package";
            $resultado = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $fila['id_package'] ?></td>
                <td><?php echo $fila['name_package'] ?></td>
                <td><?php echo $fila['details_package'] ?></td>
                <td>GRATIS</td>
                <td>
                    <div>
                        <a href="">Mostrar</a>
                        <a href="">Actualizar</a>
                        <a href="">Eliminar</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>