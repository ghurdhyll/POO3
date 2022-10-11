<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct()
    {
        $this->currentVehicles = [];
        $this->nbLane = 4;
        $this->maxSpeed = 90;
        
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            array_push($currentVehicles, $vehicle);
        }
    }
}
