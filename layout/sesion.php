<?php

session_start();
  if(isset($_SESSION['sesion_usuario'])) { // para saber si el usuario ya ha iniciado sesion
    // echo "si existe"; lo comentamos porque sabemos que ya existe una sesion y queremos concetanr con el mensaje de bienvenida de sweeralert2
    $usuario_sesion = $_SESSION['sesion_usuario']; // almacenamos la sesion en esta variable 
    $sql = "SELECT * FROM turnossistema.tb_usuarios WHERE usuario = '$usuario_sesion'"; // hacemos una consulta sql para traer el nombre de quien inicie sesion y levarlo a mas abajo del codigo
    $query = $pdo->prepare($sql); // esto es para ejecutar la consulta, lo traemos del archivo ingreso
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $nombres_sesion = $usuario['nombres']; // en esta variable guardamos el nombre de quien ha hecho sesion
}
  }else {
    echo "no existe";
    header('Location: '.$URL.'/login');
  }

  ?>