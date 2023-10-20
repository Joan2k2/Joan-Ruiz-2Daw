<?php

class ModeloSaludar{
    private $hora;

    public function __construct($hora) {
        $this->hora = time();
}


    /**
     * Get the value of hora
     */ 
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of hora
     *
     * @return  self
     */ 
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }
}

?>