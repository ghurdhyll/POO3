<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    protected array $currentVehicles;
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            array_push($currentVehicles, $vehicle);
        }
    }
}
