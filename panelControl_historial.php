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
    <h1>Historial</h1>
    <p class="boton-agregar"><a href="">Agregar</a></p>
    <table>
        <tr>
            <th>#Pago</th>
            <th>Fecha</th>
            <th>#Factura</th>
            <th>Acciones</th>
        </tr>
        <tr>
            <td>1</td>
            <td>7-07-2024</td>
            <td>1</td>
            <td>
                <div>
                    <a href="">Mostrar</a>
                    <a href="">Actualizar</a>
                    <a href="">Eliminar</a>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>