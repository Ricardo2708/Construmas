<?php 

    require'build/php/funciones.php';
    incluirTemplate('header')

?>


    
    <main class="contenedor seccion wow fadeInDown">

        <div class="title-iconos">
            <h2 class="title-nosotros">Nosotros Ofrecemos</h2>
            <p>
                En Cada Producto:
            </p>
        </div>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono1" loading="lazy" class="wow swing" data-wow-delay="0s">
                <h3>Seguridad</h3>
                <p>
                    En nuestros productos ofrecemos seguridad
                    cumpliendo normativas tecnicas 
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono2" loading="lazy" class="wow bounceIn" data-wow-delay="0.5s">
                <h3>Rentabilidad</h3>
                <p>
                    Relacion, calidad, precio es nuestro enfoque en cada 
                    uno de nuestros productos
                </p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono3" loading="lazy" class="wow rotateIn" data-wow-delay="1s">
                <h3>Durabilidad</h3>
                <p>
                    Los productos estan fabricados para tener una alta resistencia y
                    durabilidad 
                </p>
            </div>
        </div>
    </main>

    <hr class="contenedor">

    <section class="seccion contenedor" data-aos="fade-down" >
        <h2>Nuestros Productos</h2>
        <p id="producto">Materiales De Construccion:</p>
        <div class="contenedor-anuncios" >

            <div class="anuncio wow fadeInUp">
                <picture>
                    <img src="build/img/Estuco.webp" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Estucos</h3>
                    <p>Repello Instantaneo</p>
                    <a href="anuncio.php" class="boton boton-rojo-block">
                        Hoja Tecnica
                    </a>
                </div>
            </div>



            <div class="anuncio wow fadeInUp">
                <picture>
                    <img src="build/img/C .webp" alt="anuncio" loading="lazy">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Pegamentos</h3>
                    <p>Pegamento Para Ceramica</p>
                    <a href="anuncio.php" class="boton boton-rojo-block">
                        Hoja Tecnica
                    </a>
                </div>
            </div>



            <div class="anuncio wow fadeInUp">
                <picture>
                    <img src="build/img/B.webp" alt="anuncio" loading="lazy" class="big">
                </picture>

                <div class="contenido-anuncio">
                    <h3>Porcelanas</h3>
                    <p>Porcelana Para Sisado</p>
                    <a href="anuncio.php" class="boton boton-rojo-block">
                        Hoja Tecnica
                    </a>
                </div>
            </div>
            
        </div>
        <div class="ver-todas">
            <a href="anuncios.php" class="boton-verde"> Ver Todos Los Productos</a>
        </div>

        <div class="contenedor seccion seccion-inferior wow fadeInDown">
            <section class="blog">
                <h3>Mision Y Vision</h3>

                <div class="seccion-blog">
                    <article class="entrada-blog">
                        <div class="imagen" data-aos="fade-right">
                            <picture>
                                <img src="build/img/vision1.webp" alt="entrada-blog" loading="lazy">
                            </picture>
                        </div>
                        <div class="texto-entrada">
                            <h4>Nuestra Mision</h4>
                            <p>
                                Estara Disponible En Breve.....
                            </p>
                        </div>

                    </article>

                    <article class="entrada-blog">
                        <div class="imagen" data-aos="fade-right" data-aos-duration="1000">
                            <picture>
                                <img src="build/img/vision1.webp" alt="entrada-blog" loading="lazy">
                            </picture>
                        </div>
                        <div class="texto-entrada">

                            <h4>Nuestra Vision</h4>
                            <p>
                                Estara Disponible En Breve.....
                            </p>

                        </div>

                    </article>
                </div>
            </section>

            <section class="testimoniales">
                <h3>Nuestra Empresa</h3>
                <div class="testimonial">
                    <blockquote>
                        Somos una empresa joven y competitiva fundada en junio del año 2014, que busca ser líder en el mercado de la construcción.
                        nos dedicamos a la venta de repello para paredes y pegamento para piso ceramico
                        
                    </blockquote>
                    <p>Construmas S.A De C.V</p>
                </div>
            </section>
        </div>

        
    </section>


    <section class="imagen-contacto imagen-sombra wow fadeInDown">
        <div class="texto-contacto" data-aos="fade-down">
            <div class="texto-participacion">
                <h2>Asignacion De Proyectos</h2>
                <p>
                    Proyectos En Los Que Hemos Participado
                </p>
            </div>
            <a href="blog.php" class="boton-verde-block wow flipInX" data-wow-delay="0.5s">Ver Proyectos</a>
        </div>
        
    </section>




    <section class=" imagen-direccion contenedor wow fadeInDown">
        <div class="contenido-direccion">
            <h2>Contactanos</h2>
            <p>
                Por medio de correo, telefono o simplemente visitenos cuando lo desee
            </p>
            <div class="iconos-contacto">
                <ul>
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <div class="informacion-icono">
                            <h3>Correo</h3>
                            <p>
                                info@construmas.com.sv
                                <br>
                                www.construmas.com.sv
                            </p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <div class="informacion-icono">
                            <h3>Telefono</h3>
                            <p>
                                +503 2213 7400
                                <br>
                                +503 6044 7112
                            </p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-map-location-dot"></i>
                        <div class="informacion-icono">
                            <h3>Direccion</h3>
                            <p>
                                Km 4 1/2 carretera antigua a nejapa
                            </p>
                        </div>
                    </li>
                    <li>
                        <i class="fa-solid fa-clock"></i>
                        <div class="informacion-icono">
                            <h3>Horarios</h3>
                            <p>
                                Lunes - Viernes: 8am - 5pm
                                <br>
                                Sabados: 8am - 12pm
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6330.699940591973!2d-89.21851080253015!3d13.80550880113425!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fb8e746b5e374d9!2sConstrumas!5e0!3m2!1ses!2ssv!4v1657575974040!5m2!1ses!2ssv" width="1100" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
            
        </div>
        
    </section>



    <?php 
        incluirTemplate('footer')
    
    
    ?>
    <script src="build/js/bundle.min.js"></script>
    
</body>
</html>