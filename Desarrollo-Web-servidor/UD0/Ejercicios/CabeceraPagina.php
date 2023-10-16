<?php

//Permite crear una cabecera personalizada
class CabeceraPagina{

    private $titulo;
    private $alineado;
    private $fondo;
    private $fuente;


    public function __construct($titulo,$alineado,$fondo,$fuente)
    {
        
        $this->titulo=$titulo;
        $this->alineado=$alineado;
        $this->fondo=$fondo;
        $this->fuente=$fuente;
    }



    public function montarCabezado(){

        print("<h1 align='$this->alineado' style='color:$this->fuente;background-color:$this->fondo'> {$this->titulo}</h1>");
    }



}




?>