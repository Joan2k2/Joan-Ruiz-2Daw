<?php

abstract class Trabajador{

    private $nombre,$sueldo;

    abstract function calcularSueldo();
    public function getNombre(){

        return $this->nombre;

    }

 

    public function getSueldo(){

        return $this->sueldo;

    }

    public function __construct($nombre,$sueldo){

        $this->nombre=$nombre;
        $this->sueldo=$sueldo;
    }

     function imprimirDatos(){

        print("hola {$this->nombre} cobras {$this->sueldo}");


    }




}
