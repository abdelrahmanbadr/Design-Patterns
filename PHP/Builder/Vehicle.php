<?php
namespace DesignPatterns\Builder;
class Vehicle 
{
    private  $engine;
    private  $color;
    private  $wheels;

    public function setEngine(String $engine) {
        $this->engine = $engine;
    }
    public function setColor(String $color) {
        $this->color = $color;
    }
    
    public function setWheels(int $wheels) {
        $this->wheels = $wheels;
    }
}
