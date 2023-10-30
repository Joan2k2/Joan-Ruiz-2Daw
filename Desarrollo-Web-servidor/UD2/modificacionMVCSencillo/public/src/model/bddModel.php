<?php
class ModeloDB {
    private $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli($GLOBALS['hostname'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['databaseName']);

        if ($this->mysqli->connect_error) {
            die("Error de conexión: " . $this->mysqli->connect_error);
        }
    }

    function obtenerTodosLosDatos() {
        $datos = array(); // Un arreglo para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla (reemplaza 'mi_tabla' por el nombre de tu tabla)
        $query = "SELECT * FROM mi_tabla";
    
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
        $datos = array(); // Un arreglo para almacenar los datos recuperados
    
        // Consulta SQL para seleccionar todos los registros de una tabla (reemplaza 'mi_tabla' por el nombre de tu tabla)
        $query = "SELECT * FROM mi_tabla WHERE id = {$id}";
    
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