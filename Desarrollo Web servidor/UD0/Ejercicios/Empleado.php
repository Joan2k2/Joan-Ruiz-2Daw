<?php

class Empleado {

private $nombre;
private $sueldo;

public function __construct($nombre,$sueldo)
{
    $this->nombre=$nombre;
    $this->sueldo=$sueldo;
}


function impuestos(){
    if($this->sueldo>=3000){
        print("Tu sueledo és mayor a {$this->sueldo} deberías plantearte irte a Andorra dado que tienes que pagar más impuestos");


    }


}

}






?>