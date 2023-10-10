<?php
//El código rompía el principio de "Sustitución de Liskov" debido a que la clase cuadrado heredaba de rectangulo 
//cuando hay funcines y variables que no iba a gastar
class Rectangle
{
    private $width;
    private $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Square 
{
    private $width;

    public function __construct($width)
    {
        $this->width=$width;
    }
    public function getArea()
    {
        return $this->width * 2;
    }

    
}
?>