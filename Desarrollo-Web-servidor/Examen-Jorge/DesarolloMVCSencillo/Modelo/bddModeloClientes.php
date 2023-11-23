<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once(__DIR__ . "../../dbUtil.php");
class BddModeloClientes
{
    public function llamar1Cliente($id){

        $dbutil= new dbUtil();
        $query = "SELECT * FROM CLIENTE WHERE CLIENTE_COD=". $id;
        return $dbutil->find($query);
    }
    public function llamartodosClientes(){
        $dbutil= new dbUtil();
        $query = "SELECT * FROM CLIENTE";
        return $dbutil->findAll($query);

    }

   
    //devuelve un array con los campos de la tabla y su valor(titulo: pepito)
    // public function obtenerTodosLosDatos()
    // {
    //     $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia

    //     $con = $model->getConnection(); // Obtener la conexión

    //     // Consulta SQL para seleccionar todos los registros de una tabla 
    //     $query = "SELECT * FROM CLIENTE";

    //     $result = $con->query($query);

    //     if ($result) {
    //         if ($result->num_rows > 0) {
    //             $arrayNuev = array();
    //             while ($row = $result->fetch_assoc()) {
    //                 // Agregar cada fila de datos al arreglo

    //                 $arrayNuev[] = $row;
    //             }
    //             return $arrayNuev;
    //         }
    //     } else {
    //         echo "Errrrrror";
    //     }
    // }

    // public function obtenerUnCliente($id)
    // {
    //     $model = dbUtil::getInstance(); // Usar el Singleton para obtener la instancia

    //     $con = $model->getConnection(); // Obtener la conexión

    //     // Consulta SQL para seleccionar todos los registros de una tabla 
    //     $query = "SELECT * FROM CLIENTE WHERE CLIENTE_COD=". $id;

    //     $result = $con->query($query);

    //     if ($result) {
    //         if ($result->num_rows > 0) {
    //             $arrayNuev = array();
    //             while ($row = $result->fetch_assoc()) {
    //                 // Agregar cada fila de datos al arreglo

    //                 $arrayNuev[] = $row;
    //             }
    //             return $arrayNuev;
    //         }
    //     } else {
    //         echo "Errrrrror";
    //     }
    // }

}
