<?php
namespace App\DesignPatterns;
class Singletone
{
    public static $object;
    public  $number = 0;

    private function __construct(){}

    
    public static function getSingletoneObject()
    {
        if(Self::$object == null)
            Self::$object = new Singletone;
        return Self::$object;
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