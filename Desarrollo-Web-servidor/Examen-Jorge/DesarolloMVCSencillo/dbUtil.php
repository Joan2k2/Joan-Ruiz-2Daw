<?php
 
class dbUtil{
    
    private static $instance = null;
    private $connection;
 
    public function __construct() {
        // Recogemos los datos del archivo config
        $database = file_get_contents("./config.json");
        $config = json_decode($database, true);
        $host = $config["host"];
        $username = $config["usuario"];
        $password = $config["contrasena"];
        $dbname = $config["nombre_base_datos"];
 
        echo($host." ".$username." ".$password." ".$dbname);
        // Abrimos la conexión
        $this->connection = new mysqli($host, $username, $password, $dbname);
 
        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    }
 
    public static function getInstance() {
        // Verifica si ya hay una instancia existente
        if (self::$instance === null) {
            // Si no existe una instancia, crea una nueva
            self::$instance = new self();
        }
        // Devuelve la instancia existente o recién creada
        return self::$instance;
    }
   
    public function getConnection() {
        // Devuelve la conexión a la base de datos
        return $this->connection;
    }
   
    public function find($query)
    {
        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia

        $con = $model->getConnection(); // Obtener la conexión

        // Consulta SQL para seleccionar todos los registros de una tabla 
        

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
    public function findAll($query)
    {
        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia

        $con = $model->getConnection(); // Obtener la conexión

        // Consulta SQL para seleccionar todos los registros de una tabla 
        

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
}
?>