<?php


namespace App;


class Car implements ICar
{       
    private $wheels;
    private $type;
    private $color;
    private $state;
    
    public function __construct($type, $wheels, $color, $state)
    {
        $this->type = $type;
        $this->wheels = $wheels;
        $this->color = $color;
        $this->state = $state;
    }

    public function getType() {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->wheels;
    }
    
    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }
}
