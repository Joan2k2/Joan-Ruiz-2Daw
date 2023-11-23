<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once './Modelo/bddModeloClientes.php';
require_once './Controlador/bddControllerCliente.php';
require_once './Vista/bddView.php';

require_once './Modelo/bddModeloEmpleados.php';
require_once './Controlador/bddControllerEmpleado.php';


require_once "./Vista/vistaInicial.php";

// Inicializamos el modelo, controladores y vista
$vista= new BddView();
$modeloEmpleado=new BddModeloEmpleados();
$controllerEmpleado=new BddControllerEmpleado($modeloEmpleado,$vista);

$modeloCliente=new BddModeloClientes();
$controllerCliente=new BddControllerCliente($modeloCliente,$vista);

$vistaInicial=new VistaInicial();
// Obtener la ruta actual desde la URL
//arreglar la ruta, no coge el valor de la ruta, siempre va al valor false
// todo es por la imagen del contenedor
//transforma la palabra route en una variable que se le asigna un valor por eso haces en el navegador ?route=list ahí route vale list


//Según lo que lee de la ruta te envia a una parte del switch 
// Obtener la ruta desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : 'default';

// Dividir la ruta en segmentos
$segments = explode('/', $route);

// Verificar el primer segmento
$firstSegment = array_shift($segments);

switch ($firstSegment) {
    case 'employees':
        // Si hay más segmentos, el siguiente es el ID del empleado
        
            $controllerEmpleado->mostrarListaEmpleado();
        
        break;

    case 'clients':
        // Si hay más segmentos, el siguiente es el ID del cliente
       
            $controllerCliente->mostrarListaCliente();
                    
        break;

    case 'clientsdetail':
        // Si hay más segmentos, el siguiente es el ID del cliente
        if (!empty($segments)) {
            $clienteId = $segments[0];
            $controllerCliente->mostrarCliente($clienteId);
        } else {
            $controllerCliente->mostrarListaCliente();
        }            
        break;

    case 'employeesdetail':
        // Si hay más segmentos, el siguiente es el ID del empleado
        if (!empty($segments)) {
            $empleadoId = $segments[0];
            $controllerEmpleado->mostrarEmpleado($empleadoId);
        } else {
            $controllerEmpleado->mostrarListaEmpleado();   
        }
        break;

    default:
        $vistaInicial->muestraIniio();
        break;
}

