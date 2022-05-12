<?php


namespace App\Factory;


use App\Car;
use App\ICar;

class CarFactory
{
    public static function createCar($type) : ICar {
       return new Car($type,4, 'blue', 'wrecked');
    }
}