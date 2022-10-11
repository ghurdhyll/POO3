<?php
abstract class HighWay {
protected array $currentVehicles;
protected int $nbLane;
protected int $maxSpeed;

abstract function addVehicle(vehicle $vehicle);

public function getcurrentVehicles(): array
{
    return $this->currentVehicles;
}

public function setcurrentVehicles(int $currentVehicles): void
{
    $this->currentVehicles = $currentVehicles;
}

public function getnbLane(): int
{
    return $this->nbLane . 'Voies';
}

public function setnbLane(int $nbLane): void
{
    $this->nbLane = $nbLane;
}

public function getmaxSpeed(): int
{
    return $this->maxSpeed . 'km/h';
}

public function setmaxSpeed(int $maxSpeed): void
{
    $this->maxSpeed = $maxSpeed;
}

}