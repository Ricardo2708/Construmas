<?php

try {
  
  function insertar(string $nombre, string $email, string $telefono){
    $user = "construmascom_ricardo";
    $password = "rikyjo11";
    $database = "construmascom_web";
 
    $conn = mysqli_connect("127.0.0.1", "{$user}", "{$password}", "{$database}");
    $sql = "INSERT INTO suscripciones (nombre,email,telefono) VALUES ('{$nombre}', '{$email}', '{$telefono}' )";
    mysqli_query($conn, $sql);
    echo('error');
  }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
