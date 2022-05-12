<?php


namespace App\Proxy;


use App\ExterniDopravce;

class CarProxy
{   
    private $delivery;
    public function __construct()
    {   
        //Pro lepší ukázku nepoužiju CarAdapter a bez protekce proti vytváření dalších instancí
       if (!isset($this->delivery)) {
           $this->delivery = new ExterniDopravce();
       }
    }

    public function createCar()
    {
        return $this->delivery->zacniVytvaretAuto();
    }
    
    public function setColor() {
        return $this->delivery->nastavBarvuAuta();
    }
}