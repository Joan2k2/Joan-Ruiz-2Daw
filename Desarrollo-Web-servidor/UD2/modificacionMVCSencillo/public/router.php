<?php
require_once './dbUtil.php';


// Inicializamos el modelo, controladores y vista

echo '0 ';
echo $_GET['route'];
echo ' ';
// Obtener la ruta actual desde la URL
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