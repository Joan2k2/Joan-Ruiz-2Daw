<?php
require_once './Modelo/modeloSaludar.php';
require_once './Controlador/controladorSaludar.php';
require_once './Vista/vistaSaludar.php';

require_once './Modelo/modeloDespedir.php';
require_once './Controlador/controladorDespedir.php';
require_once './Vista/vistaDespedida.php';

require_once './Modelo/modeloRefran.php';
require_once './Controlador/controladorRefran.php';
require_once './Vista/vistaRefran.php';

// Inicializamos el modelo, controladores y vista
$modelSaludar = new ModeloSaludar();
$viewSaludar = new VistaSaludar();
$controllerSaludar = new ControladorSaludar($model, $view);

$modelDespedir = new ModeloDespedir();
$viewDespedir = new VistaDespedida();
$controllerDespedirr = new ControladorDespedir($model, $view);

$modelRefran = new ModeloRefran();
$viewRefran = new VistaRefran();
$controllerRefran = new ControladorRefran($model, $view);

echo '0 ';
echo $_GET['route'];
echo ' ';
// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
// todo es por la imagen del contenedor
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

//Según lo que lee de la ruta te envia a una parte del switch 
switch ($route) {
    case 'saludar':
        $saludo=$modelSaludar->getHora();
        $viewSaludar->saludar($saludo);
        echo('PITO');

        break;
    case 'despedir':
        $despedida=$modelDespedir->getHora();
        $viewDespedir->despedirse($despedida);
        echo('PITa');

        break;

    case 'refran':
        $refran=$modelRefran->getRefranes();
        $viewRefran->verRefran($refran);
        echo('PITe');
        break;
    default:
    $saludo=$modelSaludar->getHora();
    $viewSaludar->saludar($saludo);
}
