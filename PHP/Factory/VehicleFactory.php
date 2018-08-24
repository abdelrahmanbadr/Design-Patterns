<?php
namespace DesignPatterns\Factory;
class VehicleFactory
{
    public static function build ($type) 
    {
             
        if(empty($type)) {
            throw new Exception('Invalid Vehicle Type.');
        } else {
 
            $className = ucfirst($type);

            if(class_exists($className)) {
                return new $className();
            } else {
                throw new \Exception('Vehicle type not found.');
            }
        }
    }
}

 class Vehicle {
    public $factory;
    public function __construct()
    {
        $this->factory = new VehicleFactory;
    }
    public function doStuff($vehicleName) 
    {
        $vehicleObject = $this->factory::build($vehicleName); 
       //// ... do stuff
    }
}
 
class Van 
{
     
    public function __construct() 
    {
        echo "Creating Van";
    }
   
     
}
 
class Truck 
{
 
    public function __construct() 
    {
        echo "Creating Truck";
    }
 
}
 
class Bus 
{
 
    public function __construct() 
    {
        
        echo "Creating Bus";
    }
   
}

    
