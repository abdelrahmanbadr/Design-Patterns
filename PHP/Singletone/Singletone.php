<?php
namespace DesignPatterns\Singletone;
class Singletone
{
    public static $object;
    public  $number = 0;
    
    //to avoid making object from this class outside it
    private function __construct(){}

    
    public static function getSingletoneObject()
    {
        Self::setSingletoneObject();
        return Self::$object;
    }
    public static function setSingletoneObject()
    {
        if(Self::$object == null)
            Self::$object = new Singletone;
    }
    
    public function counter()
    {
        $this->number++;
    }

}

// $firstObject = \App\DesignPatterns\Singletone::getSingletoneObject();
// $secondObject = \App\DesignPatterns\Singletone::getSingletoneObject();
// $thirdObject = \App\DesignPatterns\Singletone::getSingletoneObject();
// $firstObject->counter();
// $secondObject->counter();
// $thirdObject->counter();
// echo $firstObject->number,$secondObject->number,$thirdObject->number;
