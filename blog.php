<?php 

    require'build/php/funciones.php';
    incluirTemplate('header2')

?>
    <article class="galeria" id="galeria">

        <h2>Galeria De Proyectos</h2>
        <p>
            Nuestras Participaciones:
        </p>
        <div class="carousel">
            <div class="carousel__contenedor">
                <button aria-label="Anterior" class="carousel__anterior">
                    <i class="fa fa-chevron-left"></i>
                </button>

                <div>
                    <div class="contenedor-galeria carousel__lista"  id="glider">
                        <div class="carousel__elemento imagen-galeria" data-aos="fade-right" data-aos-duration="0">
                            <a href="build/img/casa0.webp" data-lightbox="roadtrip" class="image-1"></a>
                            <p>Metropoli San Gabriel</p>
                        </div>

                        <div class="carousel__elemento imagen-galeria" data-aos="fade-right" data-aos-duration="500">
                            <a href="build/img/casa11.webp" data-lightbox="roadtrip" class="image-5"></a>
                            <p>Megapoli San Miguel</p>
                        </div>

                        <div class="carousel__elemento imagen-galeria" data-aos="fade-right" data-aos-duration="1000">
                            <a href="build/img/casa6.webp" data-lightbox="roadtrip" class="image-2"></a>
                            <p>Quintas San Antonio</p>
                        </div>

                        <div class="carousel__elemento imagen-galeria" data-aos="fade-right" data-aos-duration="1500">
                            <a href="build/img/casa4.webp" data-lightbox="roadtrip" class="image-3"></a>
                            <p>Ciudad Marsella</p>
                        </div>

                        <div class="carousel__elemento imagen-galeria" data-aos="fade-right" >
                            <a href="build/img/casa2.webp" data-lightbox="roadtrip" class="image-4"></a>
                            <p>Acropoli Sonsonate</p>
                        </div>
                    </div>
                </div>

                <button aria-label="Siguiente" class="carousel__siguiente">
                    <i class="fa fa-chevron-right"></i>
                </button>

                
            </div>

            <div  role="radiogroup" role="tablist" class="carousel__indicadores"></div>
        </div>

    </article>

    <section class="contenedor seccion wow fadeInDown">
        
        <div class="proyecto-productos">
            <div class="imagen imagen-trabajo">
                <picture>
                    <img src="build/img/trabajo.webp" alt="nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    <h2>¿Que Productos Usamos?</h2>
                </blockquote>

                <p>
                    En la gran mayoria de proyectos asignados usamos nuestros productos premium, 
                    En repellos usamos nuestros Estucos
                    de diferentes tonalidades las cuales ofrecieron un mejor acabado, En pegamentos usamos 
                    nuestra linea PegaMas para dar una mejor resistencia y durabilidad 
                </p>

                <p>
                    En los proyectos usamos nuestra pintura de maxima calidad PintaMas la cual dio un
                    excelente recubrimiento y una mejor estetica
                </p>
                <a href="anuncio.php" class="boton-rojo-block wow flipInX" data-wow-delay="0.2s">Ver Catalogo</a>
                
            </div>
        </div>
    </section>


    <?php 

        incluirTemplate('footer')

    ?>

    <script src="build/js/bundle.min.js"></script>
    <script src="build/js/glider.js"></script>
</body>
</html>