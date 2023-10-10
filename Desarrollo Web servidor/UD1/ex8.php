<?php
//En este código viola el principio solid Segregación de Interfaces al crear variables  getters y setters que no se gastan
class Lamp
{
    //private  $color;
    private  $isOn;
    public function turnOn()
    {
        $this->isOn = true;
    }

    public function turnOff()
    {
        $this->isOn = false;
    }

    /*public function getColor()
    {
        return $this->color;
    }*/

    /*public function setColor($color)
    {
        $this->color = $color;
    }*/
}

class Button
{
    private Lamp $lamp;
    private $state;

    function __construct(Lamp $lamp)
    {
        $this->lamp = $lamp;
    }

    public function toggle()
    {
        $this->state = !$this->state;
        $buttonOn = $this->state;
        if ($buttonOn) {
            $this->lamp->turnOn();
        } else {
            $this->lamp->turnOff();
        }
    }

}