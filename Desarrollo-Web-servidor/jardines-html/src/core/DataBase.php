<?php

namespace app\Core;

/* require_once "../../vendor/autoload.php"; */

use PDO;
use PDOException;

/* El objetivo de esta clase es establecer una conexion a la base de datos mediante el metodo PDO */
class DataBase
{
    protected $conn;
    private $dbConfig;

    public function __construct()
    {
        $this->dbConfig = json_decode(file_get_contents(__DIR__ . "/../../Config/dbConfig.json"), true);
        $this->connect();
    }
    private function connect()
    {
        $serverName = $this->dbConfig["server"];
        $userName = $this->dbConfig["user"];
        $password = $this->dbConfig["password"];
        $dbName = $this->dbConfig["dbname"];

        try {
            $this->conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}

/* $db = new DataBase; */