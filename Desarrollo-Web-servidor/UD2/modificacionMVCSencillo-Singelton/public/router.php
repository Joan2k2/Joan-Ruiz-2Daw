<?php
//require_once("./src/model/bddModelID.php");
require_once("./src/view/bddView.php");
require_once("./src/model/bddModeloTodos.php");
//require_once("./src/controller/bddControllerId.php");
require_once("./src/controller/bddControllerList.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);
// Inicializamos el modelo, controladores y vista
// $modeloID = new BddModelID();
// $vista = new BddView();
// $controllerConID = new BddControllerId($modeloID, $vista);

$modeloLista = new BddModeloTodos();
$vista = new BddView();
$controllerLista = new BddControllerList($modeloLista, $vista);

// Obtener la ruta actual desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

//Según lo que lee de la ruta te envia a una parte del switch 
switch ($route) {
    case 'list':

        $controllerLista->mostrarLista();

        break;
    case 'detail':

        // //Sacamos el numero del registro si es que existe, si no devolvemos 1
        // $number = isset($_GET['number']) ? $_GET['number'] : 1;
        // //Conseguimos el registro y lo pasamos por pantalla
        // $controllerConID->mostrarPorID($number);

        break;

    // default:
    //     $controllerLista->mostrarLista();
}
