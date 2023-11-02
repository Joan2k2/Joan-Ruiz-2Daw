<?php
require_once ("./src/model/bddModel.php");
require_once ("./src/view/bddView.php");

error_reporting(E_ALL);
ini_set("display_errors",1);
// Inicializamos el modelo, controladores y vista
 $modelo= new BddModel();
 $vista= new BddView();

// Obtener la ruta actual desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

//Según lo que lee de la ruta te envia a una parte del switch 
switch ($route) {
    /*case 'list':
        $mostrarTodaLista=$modelo->obtenerTodosLosDatos();
        $vista->mostrarDatos($mostrarTodaLista);
        echo('PITO');

        break;*/
    /*case 'despedir':
        $despedida=$modelDespedir->getHora();
        $viewDespedir->despedirse($despedida);
        echo('PITa');

        break;

    case 'refran':
        $refran=$modelRefran->getRefranes();
        $viewRefran->verRefran($refran);
        echo('PITe');
        break;*/
    default:
     $mostrarTodaLista=$modelo->obtenerTodosLosDatos();
     $vista->mostrarDatos($mostrarTodaLista);
     
    
}