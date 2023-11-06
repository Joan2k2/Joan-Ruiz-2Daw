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


    function obtenerDatosId($id) {
        $dbutil=new dbUtil();
        $con = $dbutil->verificarConexion();
        
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas WHERE id={$id}";
    
        $result = $con->query($query);
        
        if ($result) {
            if($result->num_rows > 0){
                $arrayNuev=array();
                while ($row = $result->fetch_assoc()) {
                    // Agregar cada fila de datos al arreglo
                    
                    $arrayNuev[]=$row;
                }
                return $arrayNuev;
            }
          
        }else{
            echo"Errrrrror";
        }
    
        
    }

    
 
}

?>