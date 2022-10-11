<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{

    protected int $loadCharge = 0;

    protected int $currentEnergy = 100;

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    public function __construct(int $loadCapacity, string $color, int $nbSeats, string $energyType)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergyType($energyType);
        $this->loadCapacity = $loadCapacity;
    }


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


    public function getloadCapacity(): int
    {
        return $this->loadCapacity;
    }

    public function setloadCapacity($loadCapacity): void
    {
        $this->loadCapacity = $loadCapacity;
    }


    public function getloadCharge(): int
    {
        return $this->loadCharge;
    }

    public function setloadCharge($loadCharge): void
    {
        $this->loadCharge = $loadCharge;
    }

    public function isTruckFull(): string
    {
        if ($this->loadCharge < $this->loadCapacity)
        {
            return 'in filling';
        } else {
            return 'full';
        }
    }
}