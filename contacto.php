<?php 
    require'build/php/funciones.php';
    incluirTemplate('header2');

    $errores = [];
            
    $name = '';
    $email = '';
    $phone = '';
    $action = '';
    $msg = '';

    if($_SERVER["REQUEST_METHOD"] === 'POST'){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $action = $_POST['action'];
        $msg = $_POST['msg'];

        if(!$name){
            $errores[] = 'Debes Ingresar Tu Nombre';
        }
        if(!$email){
            $errores[] = 'Debes Ingresar Tu Correo Electronico';
        }
        if(!$phone){
            $errores[] = 'Debes Añadir Un Numero De Telefono';
        }
        if(!$action){
            $errores[] = 'Selecciona Una Opcion';
        }
        if(strlen($msg) < 5){
            $errores[] = 'Debes Añadir Un Mensaje Valido';
        }

        

        if(isset($_POST['g-recaptcha-response'])){
            $captcha=$_POST['g-recaptcha-response'];
            $secret= '6LcB1SIhAAAAAEl1Ug4rV4WvyaZzKaqcLkLiZ7zb';
            $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
            $g_response = json_decode($response);
            if ($g_response->success === true){
                
                $title = "Tipo De Solicitud: {$action}";
                $header = "From: Cliente : {$name}"."\r\n";
                $header = "MIME-Version: 1.0\r\n";
                $header .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
                $header .= "Content-Transfer-Encoding: 8bit\r\n";
                $body = "Mensaje:
                        \n{$msg} 
                        \nContacto Del Cliente:
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
            }
            else{
                $errores[] = 'Valida El Recaptcha';
            }
        }
        else{
            $errores[] = 'Valida El Recaptcha';
        }
    }
?>

    <main class="contenedor seccion wow fadeInDown">
        <div class="title-formulario">
            <h2>Formulario De Contacto</h2>
            <p>Llena El Formulario:</p>
        </div>
        <div class="contenedor-contacto">
            <div class="wow fadeInDown">
                <picture>
                    <source srcset="build/img/persona1.webp" type="image/webp">
                    <source srcset="build/img/persona1.jpg" type="image/jpeg">
                    <img src="build/img/persona1.jpg" alt="nosotros" loading="lazy">
                </picture>
            </div>

            <form method="post" class="formulario" action="/contacto.php">
                <fieldset class="wow fadeInUp">
                    <legend>Datos Personales</legend>

                    <?php 
                        $numero = count($errores); 
                        if($numero > 3){
                            ?>
                            <script>
                                swal("Error", "Revisa Los Campos Del Formulario", "error");
                            </script>
                            <div class="alerta error">
                                Tiene +3 Errores En Su Formulario
                            </div> 
                            <?php
                        }
                        else{
                            foreach($errores as $error):?>
                            <div class="alerta error">
                                <?php echo $error;?>
                            </div> 

                            <?php endforeach;?>
                            <?php
                        }

                    ?>
                    

                    <label for="nombre">Nombre :</label>
                    <input type="text" placeholder="Name" id="name" name="name" value="<?php echo $name; ?>">

                    <label for="email">Email :</label>
                    <input type="email" placeholder="example@example.com" id="email" name="email" value="<?php echo $email; ?>">

                    <label for="telefono">Telefono :</label>
                    <input type="tel" placeholder="0000-0000" id="phone" name="phone" value="<?php echo $phone; ?>">

                </fieldset>

                <fieldset class="wow fadeInUp">
                    <legend>Informacion</legend>

                    <label for="opciones">¿Que Desea? :</label>
                    <select id="action"  name="action">
                        <option value="" disabled selected>--Seleccione--</option>
                        <option value="info">Informacion</option>
                        <option value="Cotizacion">Cotizar Producto</option>
                        <option value="Compra">Comprar Producto</option>
                        
                    </select>

                    <label for="producto">Mensaje :</label>
                    <textarea id="msg" cols="30" rows="3" name="msg"><?php echo htmlspecialchars($msg); ?></textarea>

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