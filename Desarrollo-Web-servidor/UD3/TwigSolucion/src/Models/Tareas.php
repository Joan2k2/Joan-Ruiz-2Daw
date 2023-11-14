<?php

namespace App\Models;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\Interfaces\IDataBase;

class Tareas
{
    private IDatabase $database;
    public function __construct(IDatabase $database)
    {
        $this->database = $database;  
    }
    public function findAll(){
        $sql = "SELECT * FROM tareas";
        return $this->database->executeSQL($sql);
    }

    public function findById($id){
        $sql = "SELECT * FROM tareas WHERE id=$id";
        return $this->database->executeSQL($sql);
    }

}
