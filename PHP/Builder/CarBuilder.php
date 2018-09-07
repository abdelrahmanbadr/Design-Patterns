<?php
namespace DesignPatterns\Builder;
class CarBuilder implements VehicleBuilder
{
    /**
     * @var Vehicle
     */
    private $car;
    public function __construct()
    {
        $this->car = new Vehicle();
    }
   
    public function setEngine(string $enginType)
    {
        $this->car->setEngine($enginType);
    }
    
    public function  setWheels(int $wheels)
    {
        $this->car->setWheels($wheels);
    }

    public function setColor(string $color)
    {
        $this->car->setColor($color);
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
    
    
}
