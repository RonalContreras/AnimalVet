<?php

define('APP_NAME', 'AnimalVet');
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'animalvet');

$servidor = "mysql:dbname=" . BD . ";host=" . SERVIDOR . ";charset=utf8";

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    //echo "conexion exitosa  a la base datos";
} catch (PDOException $e) {
    echo "error nose pudo conectar a la base de datos";
}


$URL = "http://localhost/AnimalVet";

date_default_timezone_set("America/Bogota");
$fecha_Hora = date('y-m-d H:i:s');