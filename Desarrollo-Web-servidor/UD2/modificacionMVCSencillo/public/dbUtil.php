<?php

$jsonString = file_get_contents('config.json');

// Convierte el JSON a un array asociativo
$config = json_decode($jsonString, true);

if ($config === null) {
    die("Error al decodificar el JSON.");
} else {
    // Ahora almacenamos los valores asociados al JSON en variables globales
    $GLOBALS['databaseName'] = $config["nombre_base_datos"];
    $GLOBALS['username'] = $config["usuario"];
    $GLOBALS['password'] = $config["contrasena"];
    $GLOBALS['hostname'] = $config["host"];
    $GLOBALS['puerto'] = $config["puerto"];
    $GLOBALS['type'] = $config["tipo_base_datos"];
}

function verificarConexion()
{
    // Accede a las variables globales en lugar de pasarlas como parámetros
    $mysqli = new mysqli($GLOBALS['hostname'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['databaseName']);

    // Verificar si la conexión se realizó con éxito
    if ($mysqli->connect_error) {
        return false;
        die("Error de conexión: " . $mysqli->connect_error);
    }else{
        return true;
    }
}

?>