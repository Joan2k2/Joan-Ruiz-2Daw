<?php

namespace app\Model;

/* require_once "../../vendor/autoload.php"; */

use app\Core\DataBase;
use PDO;

class ClientsModel extends DataBase {

    //Funcion cuyo objetivo es pedirle a la base de datos información sobre los clientes y retornar un array asociativo con sus datos

    public function getClients() {
        $result = $this->conn->query("select CodigoCliente, NombreCliente, Telefono, Ciudad from Clientes");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

/* $clients = new ClientsModel();

var_dump($clients->getClients()); */