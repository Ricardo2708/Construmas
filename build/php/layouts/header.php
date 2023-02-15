<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description"
    content="Contrumas S.A De C.V Empresa de construccion ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construmas S.A DE C.V</title>
    <link rel="icon" href="build/img/icon.png">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="build/css/lightbox.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "> </script> 
    <script src="build/js/bundle.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</head>
<body>
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <header class="header inicio">

        <div class="barra">
            <a href="index.php">
                <img src="build/img/logo3.webp" alt="logo">
            </a>

            <div class="mobile-menu">
                <img src="build/img/barras.svg" alt="menu" loading="lazy">
            </div>
            
            <nav class="navegacion">
                <a href="index.php" class="wow fadeInDown enlace" data-wow-delay="0.4s">Inicio</a>
                <a href="nosotros.php" class="wow fadeInDown enlace" data-wow-delay="0.2s">Nosotros</a>
                <a href="blog.php" class="wow fadeInDown enlace" data-wow-delay="0.6s">Proyectos</a>
                <a href="contacto.php" class="wow fadeInDown enlace" data-wow-delay="0.8s">Contacto</a>
                
            </nav>
           
        </div>
        <div class="contenedor contenido-header">
            
            <!-- cierre de la barra -->

            <div class="home">
                <div class="texto-home">
                    <h1 class="wow fadeInDown texto1 " data-aos="fade-up"> <span>Más</span> Calidad | <span>Más</span> Rendimiento | <span>Más</span> Economía</h1>
                    <h1 class="wow fadeInDown texto2">Suministros Para La Construccion </h1>
                    <p class="wow fadeInDown texto1">Los Mejores Materiales De Construcción Para Un Resultado Perfecto</p>
                    <p class="wow fadeInDown texto2">Los Mejores Materiales De Construcción</p>
                    <div>
                        <a href="#producto" class="boton boton-rojo-block wow bounceIn">Ver Productos</a>
                    </div>
                </div>
                <picture class="wow fadeInUp parallax-container" >
                    <img src="build/img/titulo.webp" alt="anuncio" loading="lazy" class="parallax">
                </picture>
                
            </div>

            <a class="contenedor-bajar" href="#bajar" aria-label="About">
                <i class="fa-sharp fa-solid fa-arrow-down bajar"></i>
            </a>

        </div>
    </header>

<section class="share" id="share" data-aos="fade-right" data-aos-duration="1000"> 
    <div class="contenedor-share">
        <a href="https://www.facebook.com/people/Construmas-El-Salvador/100089960851012/" target="_blank" >
            <div class="bar-icono facebook-logo">
                <i class="fa-brands fa-facebook-f"></i>
            </div>
        </a>

        <a href="https://twitter.com/construmas_sv" target="_blank">
            <div class="bar-icono twitter-logo">
                <i class="fa-brands fa-twitter"></i>
            </div>
        </a>

        <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfpKPnstvCtCbmpnnPXvTjbTTFNjXgSTxxTmdTmWLkzJCsWVSvPwMwTBFzptvkXQBLkPGq" target="_blank">
            <div class="bar-icono email-logo">
            <i class="fa-brands fa-google"></i>
            </div>
        </a>
        <a href="https://www.linkedin.com/company/construmas-sa.-de-cv./about/" target="_blank">
            <div class="bar-icono facebook-logo">
                
                <i class="fa-brands fa-linkedin-in"></i>
                
            </div>
        </a>

    </div>
</section>



<script>
  AOS.init();

    const ruta = window.location.pathname
    const clase = document.querySelector('.enlace')
    if(ruta == '/index.php' || ruta == '/'){
        
        clase.classList.add('nombreclase');
    }
    else if(ruta == '/nosotros.php'){
        clase.classList.add('nombreclase');
    }   
</script>