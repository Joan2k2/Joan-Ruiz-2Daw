<?php

//El código rompía el principio de "Responsabilidad Única" debido a que en una misma clase están involucradas dos o más capas
//de la arquitectura

class Car
{
    private $id;
    private $model;
    private $brand;

    public function __construct($id, $model, $brand)
    {
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getBrand()
    {
        return $this->brand;
    }
}
class cardb{
    private $carsDb;
    public function __construct()
    {
        $this->carsDb = [
            new Car("1", "Golf III", "Volkswagen"),
            new Car("2", "Multipla", "Fiat"),
            new Car("3", "Megane", "Renault"),
        ];
    }
    


}
class carformater{

    public function getCarsNames($cars)
    {
        $sb = "";
        foreach ($cars as $car) {
            $sb .= $car->getBrand() . " ";
            $sb .= $car->getModel() . ", ";
            $sb .= "<br>";
        }
        return substr($sb, 0, -2);
    }
}
class CarManager
{
    public function getFromDb($cars,$carId)
    {
        foreach ($cars as $car) {
            if ($car->getId() == $carId) {
                return $car;
            }
        }
        return null;
    }

    

    public function getBestCar($cars)
    {
        $bestCar = null;
        foreach ($cars as $car) {
            if ($bestCar == null || $car->getModel() > $bestCar->getModel()) {
                $bestCar = $car;
            }
        }
        return $bestCar;
    }
}
