<?php 
    require'build/php/funciones.php';
    incluirTemplate('header2');

    $errores = [];
    $name = '';
    $email = '';
    $phone = '';
    $msg = '';
    $newsletter = '';
    
    

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['msg'];
        $newsletter = $_POST['news'];

        
        
        if(empty($_POST['name'])){
            $errores[] = 'Ingresa Tu Nombre';
        }
        if(empty($_POST['email'])){
            $errores[] = 'Ingresa Tu Correo Electronico';
        }
        if(empty($_POST['phone'])){
            $errores[] = 'INgresa Un Numero De Telefono';
        }
        if(strlen($msg) < 10){
            $errores[] = 'Ingresa Un Mensaje Mas Descriptivo';
        }
        
        
        else{
            if(isset($_POST['g-recaptcha-response'])){
                $captcha=$_POST['g-recaptcha-response'];
                $secret= '6LcB1SIhAAAAAEl1Ug4rV4WvyaZzKaqcLkLiZ7zb';
                $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
                $g_response = json_decode($response);
                if ($g_response->success === true){
                    if($newsletter == 'on'){
                        require'build/php/db/conexion.php';
                        insertar($name, $email, $phone);
                        
                    }

                    
                    $title = "Solicitud De Cliente";
                    $header = "From: Cliente : {$name}"."\r\n";
                    $header .= "MIME-Version: 1.0\r\n";
                    $header .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
                    $header .= "Content-Transfer-Encoding: 8bit\r\n";
                    $body = "Mensaje:
                            \n{$msg} 
                            \nInformacion Del Cliente:
                            \nNombre: {$name} 
                            \nTelefono: {$phone} 
                            \nCorreo: {$email}
                            \nCorreo Enviado Desde: www.construmas.com.sv";
                    $email_construmas = "info@construmas.com.sv";
                    $mail = @mail($email_construmas,$title,$body,$header);
                    ?>
                    <script>
                        swal("Nos Pondremos En Contacto","Gracias Por Preferirnos", "success");
                    </script>
                    <?php
                        $name = '';
                        $email = '';
                        $phone = '';
                        $action = '';
                        $msg = '';
                }
                else{
                    $errores[] = 'Valida El Recaptcha';
                }
            }
            else{
                $errores[] = 'Valida El Recaptcha';
            }
            
        }

        


    }
?>

    <main class="contenedor seccion wow fadeInDown">
        <div class="title-formulario">
            <h2>Formulario De Contacto</h2>
            <p>Comunicate Con Nosotros</p>
        </div>
        <div class="contenedor-contacto">
            <div class="wow fadeInDown">
                <picture>
                    <source srcset="https://img.freepik.com/foto-gratis/retrato-mujer-trabajadora-servicio-al-cliente_144627-37951.jpg?w=900&t=st=1676410024~exp=1676410624~hmac=d52d51ed7ef3889d3cdb1fa0da434b715a6cc09e06bb67ae46921b6b2c0de4c6" type="image/webp">
                    <source srcset="build/img/contacto2.jpg" type="image/jpeg">
                    <img src="build/img/contacto2.jpg" alt="nosotros" loading="lazy">
                </picture>
            </div>

            <form method="post" class="formulario" action="/contacto.php">
                <fieldset class="wow fadeInUp">
                    <legend>Rellena El Formulario: </legend>

                    <?php 
                        $numero = count($errores); 
                        if($numero > 3){
                            ?>
                            <script>
                                swal("Error", "Revisa Los Campos Del Formulario", "error");
                            </script>
                            <div class="alerta error" data-aos="fade-up">
                                Tiene +3 Errores En Su Formulario
                            </div> 
                            <?php
                        }
                        else{
                            foreach($errores as $error):?>
                            <div class="alerta error" data-aos="fade-up">
                                <?php echo $error;?>
                            </div> 

                            <?php endforeach;?>
                            <?php
                        }

                    ?>
                    

                    <label for="nombre">Nombre :</label>
                    <input type="text" placeholder="Name" id="name" name="name" require value="<?php echo $name; ?>">

                    <label for="email">Email :</label>
                    <input type="email" placeholder="example@example.com" require id="email" name="email" value="<?php echo $email; ?>">

                    <label for="telefono">Telefono :</label>
                    <input type="tel" placeholder="0000-0000" id="phone" require name="phone" value="<?php echo $phone; ?>">
                    
                    

                    <label for="producto">Mensaje :</label>
                    <textarea id="msg" cols="30" rows="5" name="msg"><?php echo htmlspecialchars($msg); ?></textarea>
                    <div class="check-newsletter">
                        <input type="checkbox" name="news" id="news">
                        <p>Suscribirse a nuestra newslatter para noticias y mas</p>
                    </div>
                    
                </fieldset>

                <div class="casilla">
                    <div class="g-recaptcha" data-sitekey="6LcB1SIhAAAAADMIRJHK7SNn9MjWMRS3SF_E9jFQ"></div>

                </div>

                <input type="submit" value="Enviar" class="boton-rojo-block boton-enviar boton-enviar2 wow flipInX" name="enviar">
                
            </form>
        </div>
    </main>
    <?php 

        incluirTemplate('footer')

    ?>
    <script src="build/js/bundle.min.js"></script>

</body>
</html>