<main class="main">
    <div class="espacio">
        <p>Paso 1 de 3</p>
        <b>Selecciona el plan ideal para ti</b>
        <p>Cambia a un plan inferior o superior en cualquier momento</p>
    </div>
    <img class="acceso" src="assets/svg/Accesos.svg" alt="Ejemplo de redescuelas">
    
    <div class="contenedor">
        <div class="contenedor-slider">
            <img class="boton-izquierda" id="btn-izquierda" src="assets/img/btn-izquierda.png" alt="Anterior">
            <div class="slider" id="slider">
                <?php
                include('config/database.php');
                $consulta = "SELECT * FROM package";
                $resultado = mysqli_query($conn, $consulta);
                
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $id_package = intval($fila['id_package']);
                    $name_package = htmlspecialchars($fila['name_package'], ENT_QUOTES, 'UTF-8');
                    $price = htmlspecialchars($fila['price'], ENT_QUOTES, 'UTF-8');
                    ?>
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th class="cabeza-carta"><?php echo $name_package; ?></th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>$<?php echo $price; ?></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="info-carta">
                                <td>
                                    <?php
                                    $consulta_beneficios = "
                                        SELECT benefits.name_benefits 
                                        FROM package_benefits 
                                        INNER JOIN benefits ON package_benefits.id_benefits = benefits.id_benefits 
                                        WHERE package_benefits.id_package = $id_package";
                                    $resultado_beneficios = mysqli_query($conn, $consulta_beneficios);
                                    
                                    while ($beneficio = mysqli_fetch_assoc($resultado_beneficios)) {
                                        $name_benefit = htmlspecialchars($beneficio['name_benefits'], ENT_QUOTES, 'UTF-8');
                                        ?>
                                        <div class="contenedor-flex">
                                            <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                            <p><?php echo $name_benefit; ?></p>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                    <div>
                                        <p class="boton">
                                            <a href="#" onclick="addPackage(<?php echo $id_package; ?>, '<?php echo $name_package; ?>', '<?php echo $price; ?>')">Comprar</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } ?>
            </div>
            <img class="boton-derecha" id="btn-derecha" src="assets/img/btn-derecha.png" alt="Siguiente">
        </div>
    </div>
</main>

<script>
function addPackage(id, name, price) {
    // Guardar los datos en localStorage
    localStorage.setItem('selectedPackage', JSON.stringify({ id, name, price }));
    // Redirigir a la página de método de pago
    window.location.href = 'metodo_de_pago.php';
}
</script>
