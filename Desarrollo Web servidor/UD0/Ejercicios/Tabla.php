<?php

class tabla
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
}