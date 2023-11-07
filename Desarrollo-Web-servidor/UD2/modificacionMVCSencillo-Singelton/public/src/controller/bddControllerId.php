
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
class BddControllerId{

private $modelo;
private $view;

public function __construct($modelo,$view){
    $this->modelo=$modelo;
    $this->view=$view;
    
}

public function mostrarPorID($number){
    $mostrarTodaLista = $this->modelo->obtenerDatosId($number);
        $this->view->mostrarDatos($mostrarTodaLista);
    
}

}

?>