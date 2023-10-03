<?php

class Gerente extends Trabajador{

    public function __construct($nombre,$sueldo){
        parent::__construct($nombre,$sueldo);
    }


function calcularSueldo(){

print("{$this->getNombre()} tu sueldo abonado es de {$this->getSueldo()}");


}




}

?>