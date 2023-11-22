<?php

namespace app\Controller;

/* require_once "../../vendor/autoload.php"; */

use app\Model\UserModel;
use app\core\AbstractController;

class UserController extends AbstractController
{
    public function main()
    {
        $user = new UserModel();

        $userData = $user->getUser();

        $name = $userData[0]['nameUser'];
        $apellido = $userData[0]['apeUser'];

        $this->render('index.html', ['name' => $name, 'apellido' => $apellido]);
    }
}

/* $userController = new UserController();

var_dump($userController->main()); */
