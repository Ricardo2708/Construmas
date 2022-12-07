<?php 

    require'build/php/funciones.php';
    incluirTemplate('header2')

?>
    
    <main class="contenedor seccion wow fadeInDown">
        <h2>Sobre Nosotros</h2>
        <p>
            Construmas S.A DE C.V
        </p>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <img src="build/img/direccion7.webp" alt="nosotros" loading="lazy">
                </picture>
            </div>

            <div class="texto-nosotros">

                <p>
                    En nuestra empresa nos dedicamos a producir suministros para la construccion de maxima calidad 
                    el cual te entregaran un resultado perfecto y eficiente
                    tales como estucos, pegamentos y porcelanas que estan pensados para dar una mejor seguridad, duracion
                    y rentabilidad 
                </p>
                <p>
                    Actualmente no solo contamos con materiales de contruccion si no que tambien con pinturas, nuestra submarca PintaMas que
                    ofrece pinturas de maxima calidad con un acabado perfecto en el cual obtendras mas recubrimiento, durabilidad y calidad
                </p>

                <a href="contacto.php" class="boton-rojo-block wow flipInX" data-wow-delay="0.5s">Contactanos</a>

                
            </div>
        </div>
    </main>

    <div class="contenedor seccion seccion-inferior" >
        <section class="blog">
            <h3>Mision Y Vision</h3>

            <article class="entrada-blog">
                <div class="imagen">
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
                <div class="imagen">
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
        </section>

        <section class="testimoniales">
            <h3>Nuestra Empresa</h3>
            <div class="testimonial">
                <blockquote>
                    Somos una empresa joven y competitiva fundada en junio del año 2014, que busca ser líder en el mercado de la construcción.
                    nos dedicamos a la venta de repello para paredes y pegamento para piso ceramico
                    
                </blockquote>
                <p>Construmas S.A DE C.V</p>
            </div>
        </section>
    </div>
    


    

<?php 
    incluirTemplate('footer')

?>
<script src="build/js/bundle.min.js"></script>

</body>
</html>