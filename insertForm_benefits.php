<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ('config/database.php');
$consulta = "";
?>
    <form action="database\insert\insert_benefits.php" method="post">
        <div>
            <label >Insertar nombre del beneficio</label>
            <input name="name_benefits" type="text">
        </div>
        <button type="submit">Agregar</button>
        
    </form>
</body>
</html>