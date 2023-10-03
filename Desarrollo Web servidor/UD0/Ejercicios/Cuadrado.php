<?php

class Cuadrado{
    private $lado;

    public function __construct($lado){

        $this->lado=$lado;

    }


    //Calcula el perimetro del cuadrado

    public function calcularPerimetro(){  

        return $this->lado+$this->lado+$this->lado+$this->lado;

    }

    //Calcula la superficie del Cuadrado

    public function calcularSuperficie(){  

        return $this->lado*2;

    }

}
?>