<?php

namespace app\Model;

/* require_once "../../vendor/autoload.php"; */

use app\Core\DataBase;
use PDO;

class UserModel extends DataBase {
    public function getUser() {
        $result = $this->conn->query('select id,nameUser,apeUser from UserJard');

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

/* $user = new UserModel();

var_dump($user->getUser()); */