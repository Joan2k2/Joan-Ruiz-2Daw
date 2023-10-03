<?php

class Empleado
{

    private $nombre;
    private $sueldo;


    //construcotr modificado Actividad 9
    public function __construct($nombre, $sueldo)
    {
        if ($sueldo == null || $sueldo == "" || $sueldo == " ") {
            $this->nombre = $nombre;
            $this->sueldo = 1000;
        } else {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
    }








    function impuestos()
    {

        if ($this->sueldo >= 3000) {
            print("Tu sueledo és mayor a {$this->sueldo} deberías plantearte irte a Andorra dado que tienes que pagar más impuestos");
        } else {
            print("Tu sueledo és mayor a {$this->sueldo} deberías plantearte irte a Andorra dado que tienes que pagar más impuestos");
        }
    }
}

class Empleado2 extends Persona
{

    private $sueldo;
    public function __construct($nombre,$edad,$sueldo)
    {
        parent::__construct($nombre,$edad);
        $this->sueldo = $sueldo;
    }
    public function imprimirSueldo(){

        print("El sueldo de empleado2 es {$this->sueldo}");
    }

    public function mostrarClasesJuntas(){
        //EJERCICIO10
        // $persona=new Persona("Roberto",34);
        //$persona->imprimirDatos();
        print("Te llamas {$this->nombre} y tienes {$this->edad}");
        

    }
    
    public function imprimirDatos(){

        print("Te llamas {$this->nombre} y tienes {$this->edad} desde la clase empleado");
    }



}

class Empleado3 extends Persona2
{

    private $sueldo;
    public function __construct($nombre,$edad,$sueldo)
    {
        parent::__construct($nombre,$edad);
        $this->sueldo = $sueldo;
    }
    public function imprimirSueldo(){

        print("El sueldo de empleado2 es {$this->sueldo}");
    }

    public function mostrarClasesJuntas(){
        //EJERCICIO10
        // $persona=new Persona("Roberto",34);
        //$persona->imprimirDatos();
        print("Te llamas {$this->nombre} y tienes {$this->edad}");
        
        
    }
    
    public function imprimirDatos(){

        print("Te llamas {$this->nombre} y tienes {$this->edad} desde la clase empleado");
    }



}
//hereda de trabajador
class EmpleadoTrabajador extends Trabajador{

    //Propiedades

    private $horasTrabajadas;

    private $valorHoras;

    // constructor

    public function __construct($nombre, $sueldo, $horasTrabajadas){

        parent::__construct($nombre,$sueldo);

        $this->horasTrabajadas = $horasTrabajadas;

        $this->valorHoras = 3.5;

    }

    //Retorna el sueldo en base a las horas trabajadas

    public function calcularSueldo()

    {

        return $this->valorHoras*$this->horasTrabajadas;

    }

};

?>
