<?php

namespace App\Core;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\Interfaces\IRoutes;

class RouteCollection implements IRoutes{
    private $routes;
    function __construct()
    {
        $this->routes = json_decode(file_get_contents(__DIR__."/../../config/Routes.json"), true);
        
    }

    /**
     * Get the value of routes
     */ 
    public function getRoutes()
    {
        return $this->routes;
    }
}