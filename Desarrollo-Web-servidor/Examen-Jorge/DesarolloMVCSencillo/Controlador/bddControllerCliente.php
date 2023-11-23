
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
class BddControllerCliente{
//controlador de la lista
private $modelo;
private $view;

public function __construct($modelo,$view){
    $this->modelo=$modelo;
    $this->view=$view;
    
}

public function mostrarListaCliente(){
    $mostrarTodaListaCliente = $this->modelo->llamartodosClientes();
    $this->view->mostrarDatosClientes($mostrarTodaListaCliente);
    
}
public function mostrarCliente($id){
    $mostrarTodaListaCliente = $this->modelo->llamar1Cliente($id);
    $this->view->mostrarCliente($mostrarTodaListaCliente);
    
}

}

?>