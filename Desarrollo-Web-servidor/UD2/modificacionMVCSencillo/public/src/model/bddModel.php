<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

require_once("../public/dbUtil.php");
class BddModel {
    
    private $mysql;

    public function __construct() {
        
         $dbutil=new dbUtil();
         $this->mysql=$dbutil->verificarConexion();
    }

    function obtenerTodosLosDatos() {
        $dbutil=new dbUtil();
        $con = $dbutil->verificarConexion();
        $datos = array(); // Un arreglo para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas";
    
        $result = $con->query($query);
        
        if ($result) {
            if($result->num_rows > 0){
                $arrayNuev=array();
                while ($row = $result->fetch_assoc()) {
                    // Agregar cada fila de datos al arreglo
                    echo print_r($row, true);
                    $arrayNuev[]=$row;
                }
                return $arrayNuev;
            }
          
        }else{
            echo"Errrrrror";
        }

        
    }

    function obtenerDatosId($id) {
        $datos = array(); // Un array para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas WHERE id = {$id}";
    
        $result = $this->mysql->query($query);
        $arrayNuev=array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                 // Agregar cada fila de datos al arreglo
                 echo print_r($row, true);
                 $arrayNuev[]=$row;
            }
            return $arrayNuev;
        }
    
        
    }

    
 
}

?>