<main class="main">
        <div class="espacio" >
            <p>Paso 1 de 3</p>
            <b>Selecciona el plan ideal para ti</b>
            <p>Cambia a un plan inferior o superior en cualquier momento</p>
        </div>
        <img class="acceso" src="assets/svg/Accesos.svg" alt="Ejemplo de redescuelas">
        <div class="contenedor">
            <div class="contenedor-slider">
                    <img class="boton-izquierda" id="btn-izquierda" src="assets/img/btn-izquierda.png" alt="Verificado">
                    <div class="slider" id="slider">
                        <table class="tabla">
                            <thead>
                                <tr>
                                    <th class="cabeza-carta">Básico</th>
                                </tr>
                                <tr class="titulo-carta">
                                    <td>GRATIS</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include ('config/database.php');
                                $consulta = "SELECT * FROM package";
                                $resultado = mysqli_query($conn, $consulta);

                                while ($fila = mysqli_fetch_array($resultado)) { ?>
                                <tr class="info-carta">
                                    <td> 
                                        <div class="contenedor-flex">
                                            <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                            <p><?php echo $fila['name_package'] ?></p>
                                        </div>
                                        <!-- <div class="contenedor-flex">
                                            <img class="check" src="assets/svg/check.svg" alt="Verificado">
                                            <p>Portada de Default</p>
                                        </div> -->
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                                </tr>
                                    
                            </tbody>
                        </table>
                        <table class="tabla">
                            <tr >
                                <th class="cabeza-carta">Básico Plus</th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>199.99</td>
                            </tr>
                            <tr class="info-carta">
                                <td>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p><b>Nombre</b></p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Teléfono</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Dirección</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Niveles</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Portada de Default</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                            </tr>
                        </table>
                        <table class="tabla">
                            <tr >
                                <th class="cabeza-carta">Lite</th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>399.99</td>
                            </tr>
                            <tr class="info-carta">
                            <td>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Teléfono</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Direcció</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Niveles</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Portada de Default</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Formulario de contacto</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Imagen de Búsqueda y Logo</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Mapa Básico</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Apuntado en Mapa Personalizado</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                            </tr>
                        </table>
                        <table class="tabla">
                            <tr >
                                <th class="cabeza-carta">Lite Plus</th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>599.99</td>
                            </tr>
                            <tr class="info-carta">
                            <td>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Teléfono</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Direcció</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Niveles</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Portada de Default</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Formulario de contacto</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Imagen de Búsqueda y Logo</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Mapa Básico</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Apuntado en Mapa Personalizado</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Links a Redes Sociales y Web</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                            </tr>
                        </table>
                        <table class="tabla">
                            <tr >
                                <th class="cabeza-carta">MKTGOLD</th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>999.99</td>
                            </tr>
                            <tr class="info-carta">
                            <td>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Teléfono</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Dirección</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Niveles</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Portada de Default</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Formulario de contacto</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Imagen de Búsqueda y Logo</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Mapa Básico</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Apuntado en Mapa Personalizado</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Links a Redes Sociales y Web</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Vista de Promocionesy Avisos</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Vizualización de Video</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Análisis de Redes Sociales</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                            </tr>
                        </table>
                        <table class="tabla">
                            <tr >
                                <th class="cabeza-carta">MKTZOOM</th>
                            </tr>
                            <tr class="titulo-carta">
                                <td>COTIZAR</td>
                            </tr>
                            <tr class="info-carta">
                            <td>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Nombre</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Teléfono</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Direcció</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Niveles</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Portada de Default</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Formulario de contacto</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Imagen de Búsqueda y Logo</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Mapa Básico</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Apuntado en Mapa Personalizado</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Links a Redes Sociales y Web</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Vista de Promocionesy Avisos</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Vizualización de Video</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Análisis de Redes Sociales</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Galería de Imágenes</p>
                                    </div>
                                    <div class="contenedor-flex">
                                        <img class="check" src="assets/img/green-check.png" alt="Verificado">
                                        <p>Mapa 360°</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="boton-carta">
                                <td>
                                <div><p class="boton"><a href="metodo_de_pago.php">Comprar</a></p></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <img class="boton-derecha" id="btn-derecha" src="assets/img/btn-derecha.png" alt="Verificado">
            </div>
        </div>  
</main>