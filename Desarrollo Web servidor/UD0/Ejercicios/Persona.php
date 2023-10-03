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

abstract class Persona2{
     protected $nombre,$edad;

     public function getNombre(){

        return $this->nombre;

    }

 

    public function getEdad(){

        return $this->edad;

    }
     public function __construct($nombre,$edad){
        $this->nombre=$nombre;
        $this->edad=$edad;
        
    }

    public function imprimirDatosPersona2(){
       
        print("Te llamas {$this->nombre} y tienes {$this->edad}");
        

    }


}





?>