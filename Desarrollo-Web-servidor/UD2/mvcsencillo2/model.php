<?php
   
   class Model{
    private $tareas = [];
    

    public function __construct()
    {
        $this->tareas[] = "Comer";
        $this->tareas[] = "Dormir";
        $this->tareas[] = "Farmear";
    }


    /**
     * Get the value of tareas
     */ 
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set the value of tareas
     *
     * @return  self
     */ 
    public function setTareas($tareas)
    {
        $this->tareas[] = $tareas;

    }
   }
?>

