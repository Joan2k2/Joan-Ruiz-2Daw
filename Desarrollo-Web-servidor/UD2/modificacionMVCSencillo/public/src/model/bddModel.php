<?php
class ModeloDB {
    private $mysqli;

    public function __construct() {
        // $dbutil=new dbUtil();
        // $dbutil->verificarConexion();
    }

    function obtenerTodosLosDatos() {
        $datos = array(); // Un arreglo para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas";
    
        $result = $this->mysqli->query($query);
    
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                // Agregar cada fila de datos al arreglo
                $datos[] = $row;
            }
            $result->free(); // Liberar el resultado
        }
    
        return $datos;
    }

    function obtenerDatosId($id) {
        $datos = array(); // Un array para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas WHERE id = {$id}";
    
        $result = $this->mysqli->query($query);
    
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