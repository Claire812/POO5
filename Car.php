<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $energy;
    private $energyLevel;
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
       return false;
    }



    /**
     * @return mixed
     */
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * @param mixed $hasParkBrake
     * @return Car
     */
    public function setHasParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }

    public function start()
    {
        if($this->setHasParkBrake(true)){
            throw new Exception('Attention, frein à main! ');
        }
        return 'enlève le frein à main ';
    }






    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;

    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}