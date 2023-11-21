<?php

class Controller{

    private $modelo;
    private $vista;

    public function __construct($modelo, $vista){

        $this->modelo = $modelo;
        $this->vista = $vista;

    }

    public function mostrarTodo(){
        
        $array=$this->modelo->obtenerTodosLosDatos();
        $this->vista->mostrar($array);
    }


}



?>