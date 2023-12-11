<?php

namespace App\Core;
error_reporting(E_ALL);
ini_set("display_errors",1);
use App\Core\Interfaces\IRequest;
use App\Core\Interfaces\IRoutes;
use Doctrine\ORM\EntityRepository;
use App\Controller\CrudController;
class Dispatcher
{
    private $routeList;
    private IRequest $currentRequest;
    public function __construct(IRoutes $routeCollection, IRequest $request)
    {
        $this->routeList = $routeCollection->getRoutes();
        $this->currentRequest = $request;
        $this->dispatch();
    }
    private function dispatch()
    {
      //  echo $this->currentRequest->getRoute();
        if (isset($this->routeList[$this->currentRequest->getRoute()])) {
            $controllerClass = "App\\Controllers\\" . $this->routeList[$this->currentRequest->getRoute()]["controller"];
            //le tengo que pasar un objeto al controller que sea abstracto?
            
            $controller =  new $controllerClass;
            $action = $this->routeList[$this->currentRequest->getRoute()]["action"];
            $controller->$action(...$this->currentRequest->getParams());
        } else {
            echo "ruta no existe";
        }
    }
}
