<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once(__DIR__ . "../../dbUtil.php");
class BddModeloEmpleados
{
    public function llamar1Empleado($id){

        $dbutil= new dbUtil();
        $query = "SELECT * FROM EMP WHERE EMP_NO=". $id;
        return $dbutil->find($query);
    }
    public function llamartodosEmpleados(){
        $dbutil= new dbUtil();
        $query = "SELECT * FROM EMP";
        return $dbutil->findAll($query);

    }
    //devuelve un array con los campos de la tabla y su valor(titulo: pepito)

}
