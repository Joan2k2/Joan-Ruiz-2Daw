
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
class BddControllerEmpleado{
//controlador de la lista
private $modelo;
private $view;

public function __construct($modelo,$view){
    $this->modelo=$modelo;
    $this->view=$view;
    
}

public function mostrarListaEmpleado(){
    $mostrarTodaLista = $this->modelo->llamartodosEmpleados();
    $this->view->mostrarDatosEmpleados($mostrarTodaLista);
    
}

public function mostrarEmpleado($id){
    $mostrarTodaLista = $this->modelo->llamar1Empleado($id);
    $this->view->mostrarEmpleado($mostrarTodaLista);
    
}

}

?>