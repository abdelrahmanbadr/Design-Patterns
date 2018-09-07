<?php
namespace DesignPatterns\Builder;
class Director
{
    /**
     * @param VehicleBuilder $builder
     */
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->setEngine();
        $builder->setColor();
        $builder->setWheels();
        return $builder->getVehicle();
    }
   
}