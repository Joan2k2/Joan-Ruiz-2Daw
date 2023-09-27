
<?php

class Circulo implements Forma{

private $radio;

public function __construct($radio){

    
    $this->radio = $radio;


}

public function calcularArea()
{
    return pi() * pow($this->radio,2);
}

}

?>