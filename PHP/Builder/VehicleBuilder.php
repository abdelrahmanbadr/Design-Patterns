<?php
namespace DesignPatterns\Builder;
interface VehicleBuilder
{
    public function createVehicle();
    public function addEngine();
    public function addWheels();
    public function addColor();
    public function getVehicle(): Vehicle;
}