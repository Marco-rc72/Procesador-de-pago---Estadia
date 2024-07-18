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
</head>
<body>
<?php
    include 'includes/navbar.php';
    ?>
    <form action="database\insert\insert_benefits.php" method="post">
        <h4>Ingresa un beneficio</h4>
        <div>
            <label >Nombre del beneficio</label>
            <input name="name_benefits" class="inputs" type="text">
        </div>
        <button type="submit" class="boton">Agregar</button>
    </form>
</body>
</html>