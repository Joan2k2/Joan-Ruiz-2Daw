<?php

class Menu{

private $operacion1;
private $operacion2;
private $operacion3;
private $operacion4;


public function getOperacion1(){
    return $this->operacion1;
}

public function getOperacion2(){
    return $this->operacion2;
}

public function getOperacion3(){
    return $this->operacion3;
}

public function getOperacion4(){
    return $this->operacion4;
}

public function __construct($operacion1,$operacion2,$operacion3,$operacion4)
{
    $this->operacion1=$operacion1;
    $this->operacion2=$operacion2;
    $this->operacion3=$operacion3;
    $this->operacion4=$operacion4;
}

public function vertical(){
    print("{$this->getOperacion1()} <br> {$this->getOperacion2()} <br> {$this->getOperacion3()} <br> {$this->getOperacion4()} <br>");


}


public function horizontal(){

  print("{$this->getOperacion1()}, {$this->getOperacion2()}, {$this->getOperacion3()}, {$this->getOperacion4()}");

}


}


?>