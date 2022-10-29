<script type="text/javascript">
    function alert_state(namestate) {
        
        if (namestate == 'success')
            swal('Descarga Exitosa', 'Gracias Por Descargar Nuestro Catalogo ', {
                icon: 'success'
            });
        else {
            swal('Ocurrio Un Rrror', 'Gracias Por Descargar Nuestro Catalogo ', {
                icon: 'error'
            });

        }
    }

    function openPDF(nombreArchivo){
        window.open("build/docs/"+nombreArchivo+".pdf","_blank");
    }
</script>


<?php
if (isset($_POST['enviar'])) {
    if (!empty($_POST['action'])) {

        $action = $_POST['action'];

        if ($action == 'premium') {
        ?>
            <script>
                openPDF('Pinturas')
                alert_state('success');
            </script>
        <?php

        }
    } 
    else {
        ?>
            <script>
                alert_state('success');
            </script>
        <?php
    }
}
