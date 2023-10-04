<?php
//Muestra la edad y el nombre de la persona
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
//Muestra la edad y el nombre de la persona además posee los getters para poder utilizarlos
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
//Muestra la edad y el nombre de la persona además posee los getters para poder utilizarlos,aparte creamos una norma que cuando se clone un objeto
//se sume 1 en la edad del objeto clonado
class Persona3 {
    public $nombre;
    public $edad;

    
    public function getNombre(){

        return $this->nombre;

    }

 

    public function getEdad(){

        return $this->edad;

    }

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function __clone() {
        // Aumenta la edad en uno cuando se clona un objeto
        $this->edad++;
    }
}









?>