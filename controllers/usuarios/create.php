<?php

include('../conexion.php'); // incluimos la conexion a la bd

$usuario = $_POST['usuario'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat']; // se reciben los datos que vengan del name en la vista de create

if ($password_user==$password_repeat){
    $password_user=password_hash($password_user, PASSWORD_DEFAULT); // este metodo cambia cada que se actualiza y tiene un contador por defecto de 10 veces que encripta, si el contador se quiere cambiar debe verse por php.net
    $sentencia = $pdo->prepare("INSERT INTO turnossistema.tb_usuarios 
    (usuario,nombres,apellidos,email,telefono,password_user, fyh_creacion) 
VALUES (:usuario, :nombres, :apellidos, :email, :telefono, :password_user, :fyh_creacion)"); // aqui se prepara y va a estar la consulta sql, se manda por parametros y se le coloca : para que reconozca los parametros

$sentencia->bindParam('usuario', $usuario); // aqui le asignamos los parametros que entran por el metodo post a las variables 
$sentencia->bindParam('nombres', $nombres);
$sentencia->bindParam('apellidos', $apellidos);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('telefono', $telefono);
$sentencia->bindParam('password_user', $password_user);
$sentencia->bindParam('fyh_creacion', $fechaHora); // esta variable viene del archivo de conexion 

$sentencia->execute();

session_start();
    $_SESSION['mensaje'] = "Registro exitoso"; // esto viaja a la vista de listado_usuario
    header('Location: '.$URL.'/usuarios/listado_usuarios.php');

}else{
    // echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no son iguales";
    header('Location: '.$URL.'/usuarios/create.php');
}




?>