<?php
namespace DesignPatterns\Builder;
class CarBuilder implements VehicleBuilder
{
    /**
     * @var Vehicle
     */
    private $car;
    public function createVehicle()
    {
        $this->car = new Vehicle();
    }
   
    public function addEngine()
    {
        $this->car->setEngine('car engine');
    }
    
    public function addWheels()
    {
        $this->car->setWheels(4);
    }

    public function addColor()
    {
        $this->car->setColor('green');
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
    
    
}
