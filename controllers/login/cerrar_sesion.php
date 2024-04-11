<?php

    include('../conexion.php');

    session_start();
    if (isset($_SESSION['sesion_usuario'])) { // aqui pregunta que si existe la sesion
        session_destroy(); // la destruya
        header('Location: '.$URL.'/'); // aqui redirecciona al login 
    }
?>