<?php
namespace DesignPatterns\Builder;
class Director
{
    /**
     * @param VehicleBuilder $builder
     */
    public function build(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addEngine();
        $builder->addColor();
        $builder->addWheels();
        return $builder->getVehicle();
    }
}