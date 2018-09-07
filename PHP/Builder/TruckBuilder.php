<?php
namespace DesignPatterns\Builder;

class TruckBuilder implements VehicleBuilder
{
    /**
     * @var Vehicle
     */
    private $truck;
    public function __construct()
    {
        $this->truck = new Vehicle();
    }
   
    public function setEngine()
    {
        $this->truck->setEngine("engine");
    }
    
    public function setWheels()
    {
        $this->truck->setWheels(8);
    }

    public function setColor()
    {
        $this->truck->setColor("red");
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
    
    
}
