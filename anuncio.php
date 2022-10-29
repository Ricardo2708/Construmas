<?php 

    require'build/php/funciones.php';
    incluirTemplate('header2')

?>
    
    <main class="contenedor seccion contenido-centrado wow fadeInDown">
        <h2>Hojas Tecnicas</h2>
        <p>Descarga en PDF: </p>

        

        <div class="contenedor-anuncios contenedor-pinturas contenedor-catalogo wow fadeInDown">

            <div class="anuncio wow fadeIn">
                <picture>
                    <img src="build/img/pintamas.webp" alt="anuncio" loading="lazy" class="img-catalogo">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Catalogo - Pintamas</h3>
                    <p>Pinturas</p>
                    

                    <form method="post" id="pinturas">
                        <label for="opciones">Seleccione El Producto :</label>
                        <select id="pinturasSelect"  name="pinturasSelect">
                            <option value="" disabled selected>--Seleccione--</option>
                            <option value="super premium">Super Premium</option>
                            <option value="high class">High Class</option>
                            <option value="high class tropical">High Class Tropical</option>
                            <option value="anticorrosivo">Anticorrosivo</option>
                            <option value="esmalte">Esmalte</option>
                            <option value="esmalte high class">Esmalte High Class</option>
                        </select>
                        <button onclick="pinturas()" type="submit" class="boton-rojo-block boton-enviar boton-enviar2" name="enviar">Descargar PDF</button>
                    </form>

                </div>
            </div>

            <div class="anuncio wow fadeIn">
                <picture class="construmas-picture">
                    <img src="build/img/logo3.webp" alt="anuncio" loading="lazy" class="img-catalogo construmas-catalogo">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Catalogo - Construmas</h3>
                    <p>Estucos Y Pegamentos</p>
                    
                    <form method="post" id="materiales">
                        <label for="opciones">Seleccione El Producto :</label>
                        <select id="materialesSelect"  name="materialesSelect">
                            <option value="" disabled selected>--Seleccione--</option>
                            <option value="estucos">Estucos</option>
                            <option value="pegamentos">Pegamentos</option>
                            <option value="porcelanas">Porcelana</option>
                        </select>
                        <button onclick="materiales()" type="submit" class="boton-rojo-block boton-enviar boton-enviar2" name="enviar">Descargar PDF</button>
                    </form>

                    
                </div>
            </div>

        </div>
    </main>

    <?php 
        incluirTemplate('footer')
    ?>

    <script  src="build/js/bundle.min.js"></script>
</body>
</html>