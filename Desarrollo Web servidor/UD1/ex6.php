<?php

//El código rompía el principio de "Responsabilidad Única" debido a que habian funcioines que no deberían heredar todas las funciones como robot y comer

interface Eater
{
    public function eat();
}

interface Worker
{
    public function work();
}
class Factory
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage($metodo)
    {
        foreach ($this->workers as $worker) {
            $metodo($worker);
        }
    }

}

class MessHall
{
    private $workers = [];

    function __construct(array $workers)
    {
        $this->workers = $workers;
    }

    public function manage()
    {
        foreach ($this->workers as $worker) {
            $worker->eat();
        }
    }

}

class Human implements Worker,Eater
{
    public function work()
    {
        return "Human works";
    }

    public function eat()
    {
        return "Human eats";
    }
}

class Robot implements Worker
{
    public function work()
    {
        return "Robot works";
    }


}