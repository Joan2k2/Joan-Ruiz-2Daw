<?php

//Este código de porsi no rompía ninguna regla pero no estaba hecho pensando en la escalabilidad


class Duck
{
    public function quack()
    {
        echo "Quack...";
    }

    public function swim()
    {
        echo "Swim...";
    }
}

class ElectronicDuck extends Duck
{
    private $on = false;

    public function quack()
    {
        if ($this->on) {
            echo "Electronic duck quack...";
        } else {
            throw new RuntimeException("Can't quack when off");
        }
    }

    public function swim()
    {
        if ($this->on) {
            echo "Electronic duck swim";
        } else {
            throw new RuntimeException("Can't swim when off");
        }
    }

    public function turnOn()
    {
        $this->on = true;
    }

    public function turnOff()
    {
        $this->on = false;
    }
}
class DuckManager
{
    public function quack(Duck $duck)
    {
        $duck->quack();
    }
    public function swim(Duck $duck)
    {
        $duck->swim();
    }
}
class Pool
{
    private $duckManager;
    function __construct()
    {
        $this->duckManager = new DuckManager();
    }
    public function run()
    {
        $donaldDuck = new Duck();
        $electricDuck = new ElectronicDuck();
        
        $this->$donaldDuck->quack();
        $this->$donaldDuck->swim();

        $electricDuck->turnOn();
        $this->$electricDuck->quack();
        $this->$electricDuck->swim();


        //Esto mirar si es otra posible opción
        /*$donaldDuck = new Duck();
        $electricDuck = new ElectronicDuck();
        
        $this->duckManager->quack($donaldDuck);
        $this->duckManager->swim($donaldDuck);

        $electricDuck->turnOn();
        $this->duckManager->quack($electricDuck);
        $this->duckManager->swim($electricDuck);*/
        
    }

    
}
