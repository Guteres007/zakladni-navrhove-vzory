<?php


namespace App\Adapter;
use App\ExterniDopravce;

class CarAdapter
{       
    private $delivery;
    public function __construct()
    {
        $this->delivery = new ExterniDopravce();
    }
    
    public function downloadData() {
        return $this->delivery->stahniData();
    }
    
    public function getDelivery() {
        return $this->delivery;
    }
}