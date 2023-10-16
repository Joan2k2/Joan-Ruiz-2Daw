<?php
   
class Controller{

private $modelo;
private $vista;

public function __construct($modelo,$vista)
{
    $this->modelo=$modelo;
    $this->vista=$vista;
}

public function actualizarTareas(){
    if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["tarea"])){

        $tarea=$_POST["tarea"];
        $this->modelo->setTareas($tarea);

    }
    
    $tarea = $this->modelo->getTareas();
    $this->vista->mostrarTareas($tarea);
    $this->vista->mostrarFormulario($tarea);

}


}

?>

