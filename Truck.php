<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;

    private int $energyLevel;

    private int $storageCapacity;

    private int $load = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorageCapacity($storageCapacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
    }
    
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    
    public function getLoad()
    {
        return $this->load;
    }

    public function setLoad(int $load): void
    {
        if ($load > $this->storageCapacity) {
            $this->load = $this->storageCapacity;
        } else {
            $this->load = $load;
        }
    }
    
    public function loading(int $load)
    {
        $this->setLoad($this->getLoad() + $load); 
        if ($this->getLoad() < $this->getStorageCapacity()) {
            return '<br>in filling';
        }else {
            return '<br>full';
        }
    }
}