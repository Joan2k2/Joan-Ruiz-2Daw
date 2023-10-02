<?php

class Persona{

    protected $nombre,$edad;


    public function __construct($nombre,$edad){
    $this->nombre=$nombre;
    $this->edad=$edad;
    
}

public function imprimirDatos(){

    print("Te llamas {$this->nombre} y tienes {$this->edad}");
}


}





?>