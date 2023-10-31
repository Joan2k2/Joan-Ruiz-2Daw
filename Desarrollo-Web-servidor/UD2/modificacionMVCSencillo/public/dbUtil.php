<?php
class dbUtil{
   private $jsonString = file_get_contents('config.json');

// Convierte el JSON a un array asociativo
function __construct(){

    $config = json_decode($this->jsonString, true);

    if ($config === null) {
        die("Error al decodificar el JSON.");
    } else {
        // Ahora almacenamos los valores asociados al JSON en variables globales
        $databaseName = $config["nombre_base_datos"];
        $username = $config["usuario"];
        $password = $config["contrasena"];
        $hostname = $config["host"];
        $puerto = $config["puerto"];
        $type = $config["tipo_base_datos"];
        
    }
}


function verificarConexion($hostname, $username, $password, $databaseName)
{
    // Accede a las variables globales en lugar de pasarlas como parámetros
    $mysqli = new mysqli($hostname, $username, $password, $databaseName);

    // Verificar si la conexión se realizó con éxito
    if ($mysqli->connect_error) {
        //return false;
        die("Error de conexión: " . $mysqli->connect_error);
    }else{
        //return true;
    }
}


}

$dbU = new dbUtil();

// Llamar a la función verificarConexion
$dbU->verificarConexion("172.20.0.3", "root", "root", "todolist");
?>