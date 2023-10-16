<?php

//El código rompía el principio de "Open/Closed" debido a que se tenía que modificar las clases para escalar
//al haber una clase de calcular area en vez de un método en cada figura porque és diferente

abstract class Shape
{
    protected ShapeType $shapeType;

    public function getType()
    {
        return $this->shapeType;
    }
}

abstract class ShapeType
{
    const CIRCLE = 0;
    const SQUARE = 1;
}

class Circle extends Shape
{
    private $radius;

    public function Circle($radius)
    {
        $this->shapeType = ShapeType::CIRCLE;
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }
    public function calculateArea()
    {
        return pi() * $this->getRadius() * $this->getRadius();
    }
}

class Square extends Shape
{
    private $side;

    function __construct($side)
    {
        $this->shapeType = ShapeType::SQUARE;
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }
    public function calculateArea()
    {
        return $this->getSide() * $this->getSide();
    }
}

