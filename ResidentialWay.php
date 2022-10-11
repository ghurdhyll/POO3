<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct()
    {
        $this->currentVehicles = [];
        $this->nbLane = 2;
        $this->maxSpeed = 50;
        
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            array_push($currentVehicles, $vehicle);;
        }
    }
}
