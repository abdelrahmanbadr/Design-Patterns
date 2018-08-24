<?php
namespace DesignPatterns\Builder;

class TruckBuilder implements VehicleBuilder
{
    /**
     * @var Vehicle
     */
    private $truck;
    public function createVehicle()
    {
        $this->truck = new Vehicle();
    }
   
    public function addEngine()
    {
        $this->truck->setEngine('truck engine');
    }
    
    public function addWheels()
    {
        $this->truck->setWheels(8);
    }

    public function addColor()
    {
        $this->truck->setColor('black');
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
    
    
}
