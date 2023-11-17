<?php

namespace App\Core;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\Interfaces\IRequest;

class Request implements IRequest
{
    private $route;
    private $params;
    function __construct()
    {
        $rawRoute = $_SERVER["REQUEST_URI"];
        $rawRouteElements = explode("/", $rawRoute);
        $this->route = "/" . end($rawRouteElements);
        //?tengo que cambiar y mirar que hace esto de abajo
        $this->params = array_slice($rawRouteElements, 5);
    }

    /**
     * Get the value of route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get the value of params
     */
    public function getParams()
    {
        return $this->params;
    }
}