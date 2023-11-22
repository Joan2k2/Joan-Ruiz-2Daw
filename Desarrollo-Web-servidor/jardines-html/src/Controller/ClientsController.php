<?php

namespace app\Controller;

/* error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../../vendor/autoload.php"; */

use app\Model\ClientsModel;
use app\View\ClientsView;

class ClientsController
{
    public function main()
    {
        $allClients = new ClientsModel();
        $clients = $allClients->getClients();

        $view = new ClientsView();

        $view->drawClients($clients);
    }
}

/* $controller = new ClientsController();

$controller->main(); */
