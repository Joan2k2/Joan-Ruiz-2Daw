<?php
//creamos controlador que vincule clases
class ControladorSaludar{

    private $model;
    private $view;

    public function __construct($model, $view){
        $this->model = $model;
        $this->view = $view;


    }
}



?>