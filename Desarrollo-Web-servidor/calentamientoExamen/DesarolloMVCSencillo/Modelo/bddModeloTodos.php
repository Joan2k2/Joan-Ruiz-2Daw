<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once(__DIR__ . "../../dbUtil.php");
class BddModeloTodos
{

    //devuelve un array con los campos de la tabla y su valor(titulo: pepito)
    public function obtenerTodosLosDatos()
    {
        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia

        $con = $model->getConnection(); // Obtener la conexión

        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM tareas";

        $result = $con->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $arrayNuev = array();
                while ($row = $result->fetch_assoc()) {
                    // Agregar cada fila de datos al arreglo

                    $arrayNuev[] = $row;
                }
                return $arrayNuev;
            }
        } else {
            echo "Errrrrror";
        }
    }

    //tendría que funcionar pero como en el dbutil tengo la bdd de todolist no va
    public function borrarDatos($name){

        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia
        $con = $model->getConnection(); // Obtener la conexión

        // Consulta SQL para eliminar un registro de la tabla
        $query = "DELETE FROM usuarios WHERE name = ?";

        // Preparar la declaración
        $stmt = $con->prepare($query);

        // Verificar si hay errores en la preparación
        if (!$stmt) {
            die('Error en la preparación de la consulta: ' . $con->error);
        }

        // Vincular el parámetro
        $stmt->bind_param("s", $name);

        // Ejecutar la consulta
        $result = $stmt->execute();

        // Verificar el resultado
        if ($result) {
            echo "Registro eliminado exitosamente.";
        } else {
            echo "Error al eliminar el registro: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();

        // Cerrar la conexión
        $con->close();
    }

    public function insertarDatos($nombre, $edad, $estilo) {
        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia
        
        $con = $model->getConnection(); // Obtener la conexión
        
        // Consulta SQL para insertar un nuevo registro en la tabla
        $query = "INSERT INTO usuarios (name, edad, estilo) VALUES (?, ?, ?)";
        
        // Preparar la declaración
        $stmt = $con->prepare($query);
        
        // Vincular los parámetros
        $stmt->bind_param("sis", $nombre, $edad, $estilo);
        
        // Ejecutar la consulta
        $result = $stmt->execute();
        
        // Verificar el resultado
        if ($result) {
            echo "Registro insertado exitosamente.";
        } else {
            echo "Error al insertar el registro: " . $stmt->error;
        }
        
        // Cerrar la declaración
        $stmt->close();
        
        // Cerrar la conexión
        $con->close();
    }
}
