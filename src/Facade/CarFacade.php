<?php


namespace App\Facade;


use App\Factory\CarFactory;

class CarFacade
{
    
    public static function getType() {
        return (CarFactory::createCar('Combi'))->getType();
    }
    
}   