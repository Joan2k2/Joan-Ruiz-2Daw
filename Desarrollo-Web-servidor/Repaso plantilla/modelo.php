<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("./dbUtil.php");
class Modelo{

    private $name;
    private $surname;
    
    public function __construct(){

    $this->name = "Joan";
    $this->surname = "Ruiz";
    }

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }
    public function obtenerTodosLosDatos() {
        $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia
        
        $con = $model->getConnection(); // Obtener la conexión
        
        // Consulta SQL para seleccionar todos los registros de una tabla 
        $query = "SELECT * FROM usuarios";
    
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