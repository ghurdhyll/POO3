<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct()
    {
        $this->currentVehicles = [];
        $this->nbLane = 1;
        $this->maxSpeed = 10;
        
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            array_push($currentVehicles, $vehicle);
        }
    }
}
