<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    protected array $currentVehicles;
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            array_push($currentVehicles, $vehicle);
        }
    }
}
