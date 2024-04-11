<?php

include('../conexion.php');

$user = $_POST['usuario'];  // aqui se manda a llamar del name del formulario 

$password_user = $_POST['password_user'];

$contador = 0;
$sql = "SELECT * FROM turnossistema.tb_usuarios WHERE usuario = '$user'"; // se hace la consulta
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
    $usuario_tabla = $usuario['usuario'];
    echo $nombres = $usuario['nombres']; 
    $password_user_tabla = $usuario['password_user']; // aqui guardamos la contraseña ya encriptada
}

if (($contador > 0) && (password_verify($password_user, $password_user_tabla))) {
    echo "Datos correctos";
    session_start(); // si los datos son correctos se iniciliza la sesion para que se guarde en 1 variable 
    $_SESSION['sesion_usuario'] = $user; // el nombre de nuestras sesion que va a estar en todo el sistema y se hara muchas consultas es = al email que ingresa desde el formulario
    header('Location: '.$URL.'/index.php'); // la variable URL viene de config y cuando se suba a un servidor solo se cambia en config
} else {
    echo "Datos incorrectos, vuelva a intentarlo";
    session_start(); // crear una sesion
    $_SESSION['mensaje'] = "Datos incorrectos <br> Ingresa nuevamente"; // este es el mensaje que va a aparecer, guardado en esta variable
    header('Location: '.$URL.'/login'); // aqui vamos a mandar al usuario otra vez al login
}







?>