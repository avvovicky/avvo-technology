<?php
// aqui se hace la consulta para el listado de usuarios 



$sql_usuarios = "SELECT * FROM turnossistema.tb_usuarios"; // traemos todos los registros de la base de datos 
$query_usuarios = $pdo->prepare($sql_usuarios); // esto es para ejecutar la consulta, lo traemos del archivo ingreso
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(PDO::FETCH_ASSOC); // en esta variable se guarda lo que nos traiga la consulta y es la que llevamos a la vista de listado de usuarios 
?>