<?php

abstract class Figura{

    protected $color;

    public function __construct($color){

        $this->color = $color;

    }
    
    abstract public function calcularArea();





}



?>