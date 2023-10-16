<?php
//hereda de trabajador y muestra el nombre y el sueldo del gerente
class Gerente extends Trabajador{

    public function __construct($nombre,$sueldo){
        parent::__construct($nombre,$sueldo);
    }


function calcularSueldo(){

print("{$this->getNombre()} tu sueldo es de {$this->getSueldo()}");


}




}

?>