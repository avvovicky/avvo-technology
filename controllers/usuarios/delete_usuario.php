<?php
include('../conexion.php'); // incluimos la conexion a la bd

$id_usuario = $_POST['id_usuario']; // se reciben los datos que vengan del name en la vista de update

    $sentencia = $pdo->prepare("DELETE FROM turnossistema.tb_usuarios WHERE id_usuario= :id_usuario"); // aqui se prepara y va a estar la consulta sql, se manda por parametros y se le coloca : para que reconozca los parametros

$sentencia->bindParam('id_usuario', $id_usuario); 

$sentencia->execute();

session_start();
    $_SESSION['mensaje'] = "Eliminación exitosa"; // esto viaja a la vista de listado_usuario
    $_SESSION['icono'] = "success"; // esto viaja a la vista de listado_usuario
    header('Location: '.$URL.'/usuarios/listado_usuarios.php');



?>