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
    <h1>Tabla Paquetes</h1>
    <p class="boton-agregar"><a href="">Agregar</a></p>
    <table>
        <thead>
            <tr>
                <th>#Paquete</th>
                <th>Nombre del paquete</th>
                <th>detalles</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT p.name_package, p.price, b.name_benefits 
            FROM package p JOIN package_benefits pb ON p.id_package = pb.id_package 
            JOIN benefits b ON b.id_benefits = pb.id_benefits;";    
            $resultado = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($resultado)) { 
                ?>
            <tr>
                <td class="counter"></td>
                <td><?php echo $fila['name_package'] ?></td>
                <td><?php echo $fila['name_benefits'] ?></td>
                <td><?php echo $fila['price'] ?></td>
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
<script src="js\counter.js"></script>
</body>
</html>