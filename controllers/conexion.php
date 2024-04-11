<?php

// aqui va todo lo relacionado a configuracion, conexion y variables globales

define('SERVIDOR','localhost'); // esto funciona solo dentro del equipo si vamos a migrar a un hosting, esta debe cambiar
define('USUARIO','root'); // este usuario viene de la bd 
define('PASSWORD',''); // por ahora sin contraseña
define('BD','turnossistema');

$servidor="mysql:dbname".BD.";host=".SERVIDOR;

try{
    $pdo=new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "La conexion a la base de datos fue exitosa";
}catch(PDOException $e){
   // print_r($e); se comenta para que el error no le aparezca al usuario 
    echo "Error al conectar a la base de datos";
}

$URL = "http://localhost/turnossistema"; // variable global que sirve para guardar la direccion

date_default_timezone_set("America/Bogota"); // aqui se le debe poner, desde php.net la zona horaria de nuestro pais, esta es una funcion propia de php y esto va a ir al archivo del controlador del create 

$fechaHora = date('Y-m-d H:i:s'); // aqui se guarda una variable con año, mes, dia y hora, minuto y segundo

