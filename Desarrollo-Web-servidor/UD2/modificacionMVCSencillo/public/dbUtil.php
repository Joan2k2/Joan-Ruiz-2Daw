<?php

$jsonString = file_get_contents('config.json');

// Convierte el JSON a un array asociativo
$config = json_decode($jsonString, true);

if ($config === null) {
    die("Error al decodificar el JSON.");
}else{
// Ahora almacenamos los valores asociados al json
$databaseName = $config["nombre_base_datos"];
$username = $config["usuario"];
$password = $config["contrasena"];
$hostname = $config["host"];
$puerto = $config["puerto"];
$type = $config["tipo_base_datos"];
verificarConexion($hostname, $username, $password, $database);
}

function verificarConexion($hostname, $username, $password, $database){

// Crear una conexión a la base de datos
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verificar si la conexión se realizó con éxito
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}
}

