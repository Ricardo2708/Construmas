<?php

try {
  
  function insertar(string $nombre, string $email, string $telefono){
    $user = "root";
    $password = "Rikyjo11*";
    $database = "construmas";
 
    $conn = mysqli_connect("127.0.0.1", "{$user}", "{$password}", "{$database}");
    $sql = "INSERT INTO suscripciones (nombre,email,telefono) VALUES ('{$nombre}', '{$email}', '{$telefono}' )";
    mysqli_query($conn, $sql);
    echo('error');
  }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}