<?php
include('../conexion.php'); // incluimos la conexion a la bd

$usuario = $_POST['usuario'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password_user = $_POST['password_user'];
$password_repeat = $_POST['password_repeat']; // se reciben los datos que vengan del name en la vista de update
$id_usuario = $_POST['id_usuario']; // se reciben los datos que vengan del name en la vista de update

if ($password_user==$password_repeat){
    $password_user=password_hash($password_user, PASSWORD_DEFAULT); // este metodo cambia cada que se actualiza y tiene un contador por defecto de 10 veces que encripta, si el contador se quiere cambiar debe verse por php.net
    $sentencia = $pdo->prepare("UPDATE turnossistema.tb_usuarios 
    SET usuario=:usuario,
        nombres=:nombres,
        apellidos=:apellidos,
        email=:email,
        telefono=:telefono,
        password_user=:password_user,
        fyh_actualizacion=:fyh_actualizacion 
    WHERE id_usuario = :id_usuario"); // aqui se prepara y va a estar la consulta sql, se manda por parametros y se le coloca : para que reconozca los parametros

$sentencia->bindParam('usuario', $usuario); // aqui le asignamos los parametros que entran por el metodo post a las variables 
$sentencia->bindParam('nombres', $nombres);
$sentencia->bindParam('apellidos', $apellidos);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('telefono', $telefono);
$sentencia->bindParam('password_user', $password_user);
$sentencia->bindParam('fyh_actualizacion', $fechaHora); // esta variable viene del archivo de conexion 
$sentencia->bindParam('id_usuario', $id_usuario); 

$sentencia->execute();

session_start();
    $_SESSION['mensaje'] = "Actualización exitosa"; // esto viaja a la vista de listado_usuario
    $_SESSION['icono'] = "success"; // esto viaja a la vista de listado_usuario
    header('Location: '.$URL.'/usuarios/listado_usuarios.php');

}else{
    // echo "Las contraseñas no son iguales";
    session_start();
    $_SESSION['mensaje'] = "Las contraseñas no son iguales";
    $_SESSION['icono'] = "error";
    header('Location: '.$URL.'/usuarios/update.php?id='.$id_usuario); // se concatena para que no pierda el id
}


?>