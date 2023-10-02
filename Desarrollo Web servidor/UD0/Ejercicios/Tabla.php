<?php

/*class tabla
{

    private $fila;
    private $columna;
    private $modificacion = ["Columna" => 2, "Fila" => 1, "Contenido" => "perico"];


    public function __construct($fila, $columna)
    {
        $this->fila = $fila;
        $this->columna = $columna;
    }

    public function crearTabla()
    {
        print("<table border=3px>");
        for ($i = 0; $i < $this->columna; $i++) {
            print("<tr>");

            for ($j = 0; $j < $this->fila; $j++) {

                if ($this->modificacion["Columna"] == $j && $this->modificacion["Fila"] == $i) {
                    print("<td style=background:#FFF300>{$this->modificacion['Contenido']}</td>");
                } else {
                    print("<td>hola</td>");
                }
            }
            print("</tr>");
        }
        print("</table>");
    }
}*/
//Ejercicio 7 y 8
class tabla {
    private $fila;
    private $columna;
    private $modificacion = ["Columna" => 2, "Fila" => 1];


    public function __construct($fila, $columna)
    {
        $this->fila = $fila;
        $this->columna = $columna;
    }

    public function crearTabla()
    {
        $celda=new celda("si?¿","#FFF300","red");
        $this->modificacion["celda"]=$celda;
        print("<table border=3px>");
        for ($i = 0; $i < $this->columna; $i++) {
            print("<tr>");

            for ($j = 0; $j < $this->fila; $j++) {

                if ($this->modificacion["Columna"] == $j && $this->modificacion["Fila"] == $i) {
                    print("<td style=background:{$celda->getColorFondo()};color:{$celda->getColorFuente()}>{$celda->getTexto()}</td>");
                } else {
                    print("<td>hola</td>");
                }
            }
            print("</tr>");
        }
        print("</table>");
    }

}

class celda{
    private $texto;
    private $colorFuente; 
    private $colorFondo;

    public function getTexto(){
       return $this->texto;  
      }

      public function getColorFuente(){
        return $this->colorFuente;  
      }
      public function getColorFondo(){
        return $this->colorFondo;  
      }


    public function __construct($texto,$colorFuente,$colorFondo){

        $this->texto=$texto;
        $this->colorFuente=$colorFuente;
        $this->colorFondo=$colorFondo;

    }
 
}
