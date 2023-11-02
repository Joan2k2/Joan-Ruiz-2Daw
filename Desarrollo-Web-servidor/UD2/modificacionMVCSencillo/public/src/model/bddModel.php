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
        $datos = array(); // Un arreglo para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas";
    
        $result = $this->mysql->query($query);
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Agregar cada fila de datos al arreglo
                $datos[] = $row;
            }
            $result->free(); // Liberar el resultado
        }
        foreach ($datos as $contenido) {
            echo"{$contenido}";
        }
        return $datos;
    }

    function obtenerDatosId($id) {
        $datos = array(); // Un array para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas WHERE id = {$id}";
    
        $result = $this->mysql  ->query($query);
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Agregar cada fila de datos al arreglo
                $datos[] = $row;
            }
            $result->free(); // Liberar el resultado
        }
    
        return $datos;
    }

    
 
}

?>