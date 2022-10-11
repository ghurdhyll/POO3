<?php

require_once 'Vehicle.php';


class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    protected int $currentEnergy = 100;
    // protected bool $engineOn = false;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
    }


    // public function startStop(): void
    // {
    //     if ($this->engineOn === false) {
    //         $this->engineOn = true;
    //         echo 'you turn the engine on';
    //     } else {
    //         $this->engineOn = false;
    //         echo 'you turn the engine off';
    //     }
    // }

    // public function forward(): string
    // {
    //     if ($this->engineOn == true) {
    //         $this->currentSpeed = 15;
    //         return "Go !";
    //     } else {
    //         return "You must start the car";
    //     }
    // }

    public function getenergyType(): string
    {
        return $this->energyType;
    }

    public function setenergyType(string $energyType): void
    {
        if (in_array($energyType, self::ALLOWED_ENERGIES)) {

            $this->energyType = $energyType;
        }

        $this->energyType = $energyType;
    }

    public function getcurrentEnergy(): int
    {
        return $this->currentEnergy;
    }

    public function setcurrentEnergy(int $currentEnergy): void
    {
        $this->currentEnergy = $currentEnergy;
    }

    // public function getengineOn(): int {
    //     return $this->engineOn;
    // }


}
