<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    protected array $currentVehicles;
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            array_push($currentVehicles, $vehicle);;
        }
    }
}
