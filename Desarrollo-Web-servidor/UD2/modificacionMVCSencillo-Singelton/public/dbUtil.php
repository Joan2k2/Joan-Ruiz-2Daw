<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

class dbUtil{
   private $jsonString;
   private $databaseName;
   private    $username;
   private    $password;
   private    $hostname;
   private    $puerto;
   private    $type;

// Convierte el JSON a un array asociativo
function __construct(){
    $this->jsonString = file_get_contents("./config.json");
    $config = json_decode($this->jsonString, true);

    if ($config === null) {
        die("Error al decodificar el JSON.");
    } else {
        // Ahora almacenamos los valores asociados al JSON en variables globales
        $this->databaseName = $config["nombre_base_datos"];
        $this->username = $config["usuario"];
        $this->password = $config["contrasena"];
        $this->hostname = $config["host"];
        $this->puerto = $config["puerto"];
        // $this->type = $config["tipo_base_datos"];
        
        
    }
}


function verificarConexion()
{
    // Accede a las variables globales en lugar de pasarlas como parámetros
    $mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->databaseName);

    // Verificar si la conexión se realizó con éxito
    if ($mysqli->connect_error) {
        //return false;
        die("Error de conexión: " . $mysqli->connect_error);
    }else{
        return $mysqli;
    }
}


}
$dbu =new dbUtil();
$dbu->verificarConexion();
?>