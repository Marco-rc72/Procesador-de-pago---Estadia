<?php
include ('config/database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/panelControl.css">
    <link href="assets/img/img_nav.png">    
</head>
<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <h1>Tabla Beneficios</h1>
    <div class="contenedor-boton">
        <p class="boton-agregar"><a href="insertForm_benefits.php">Agregar beneficio</a></p>
    </div>
    <table>
        <thead>
            <tr>
                <th>#Beneficios</th>
                <th>Nombre del Beneficio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consulta = "SELECT * FROM benefits";    
            $resultado = mysqli_query($conn, $consulta);

            while ($fila = mysqli_fetch_array($resultado)) { 
                ?>
            <tr>
                <td class="counter">#Beneficio</td>
                <td><?php echo $fila['name_benefits'] ?></td>
                <td>
                    <div>
                        <a class="boton-actualizar" 
                        href="updateForm_benefits.php?id_benefits=<?php echo $fila['id_benefits'] ?>"
                        >Actualizar</a>
                        <a class="boton-eliminar" 
                        href="database\delete\delete_benefits.php?id_benefits=<?php echo $fila['id_benefits'] ?>"
                        >Eliminar</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<script src="js\counter.js"></script>
</body>
</html>