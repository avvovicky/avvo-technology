<?php
// se recibe el id por el metodo get porque viene de la url 
$id_usuario_get = $_GET['id'];

// nos traemos la consulta para traer la informacion del usuario de listado de usuarios

$sql_usuarios = "SELECT * FROM turnossistema.tb_usuarios where id_usuario = '$id_usuario_get'"; 
$query_usuarios = $pdo->prepare($sql_usuarios); // esto es para ejecutar la consulta, lo traemos del archivo ingreso
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC); // en esta variable se guarda lo que nos traiga la consulta y es la que llevamos a la vista de listado de usuarios 

foreach ($usuarios_datos as $usuarios_dato){ // asi podemos tener y visualizar la informacion 
    $usuario = $usuarios_dato['usuario'];
    $nombres = $usuarios_dato['nombres'];
    $apellidos = $usuarios_dato['apellidos'];
    $email = $usuarios_dato['email'];
    $telefono = $usuarios_dato['telefono'];

}

?>