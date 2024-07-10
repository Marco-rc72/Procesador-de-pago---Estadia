<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="assets/img/verificado.png">    
    <link href="assets/img/footer.png">    
    <link href="assets/svg/Accesos.svg">    
    <link href="assets/svg/Boton-izquierda.svg">    
    <link href="assets/svg/Boton-derecha.svg">    
</head>
<body>
    <div class="espacio" >
        <p>Paso 1 de 3</p>
        <b>Selecciona el plan ideal para ti</b>
        <p>Cambia a un plan inferior o superior en cualquier momento</p>
    </div>
    <div class="contenedor-flex">
        <img class="acceso" src="assets/svg/Accesos.svg" alt="Ejemplo de redescuelas">
        <a href="paquetes_2.php"> 
            <img class="boton-izquierda" src="assets/svg/Boton-izquierda.svg" alt="Verificado">
        </a>
        <table class="tabla">
            <tr class="cabeza-carta">
                <th>Básico</th>
                <th>Básico Plus</th>
                <th>Lite</th>
            </tr>
            <tr class="titulo-carta">
                <td> GRATIS</td>
                <td> 199.99</td>
                <td> 399.99 </td>
            </tr>
            <tr class="info-carta">
                <td> 
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Nombre</p>
                    </div>
                    <div class="contenedor-flex">
                    <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Portada de Default</p>
                    </div>
                </td>
                <td>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Nombre</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Teléfono</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Dirección</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Niveles</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Portada de Default</p>
                    </div>
                </td>
                <td>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Nombre</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Teléfono</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Direcció</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Niveles</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Portada de Default</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Formulario de contacto</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Imagen de Búsqueda y Logo</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Mapa Básico</p>
                    </div>
                    <div class="contenedor-flex">
                        <img class="check" src="assets/svg/check.svg" alt="Verificado">
                        <p>Apuntado en Mapa Personalizado</p>
                    </div>
                </td>
            </tr>
            <tr class="boton-carta">
                <td> 
                    <div><p class="boton">Comprar</p></div>
                </td>
                <td> 
                    <div><p class="boton">Comprar</p></div>
                </td>
                <td> 
                    <div><p class="boton">Comprar</p></div>
                </td>
            </tr>
        </table>
        <a href="paquetes_2.php">
            <img class="boton-derecha" src="assets/svg/Boton-derecha.svg" alt="Verificado">
        </a>
    </div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
