<?php
namespace DesignPatterns\Builder;
interface VehicleBuilder
{
    public function setEngine();
    public function setWheels();
    public function setColor();
    public function getVehicle(): Vehicle;
}