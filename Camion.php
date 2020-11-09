<?php

require_once 'Vehicle.php';

class Camion extends Vehicle
{
    const ALLOWED_STOCKAGES = [
        'in filling',
        'full'
    ];

    private $stockage;
    private $chargement;

    public function __construct(string $color, int $nbSeats, string $stockage)
    {
        parent::__construct($color, $nbSeats);
        $this->setStockage($stockage);

    }

    public function getStockage(): int
    {
        return $this->stockage;
    }
    public function setStockage(string $stockage): Camion
    {
        if (in_array($stockage, self::ALLOWED_STOCKAGES)){
            $this->stockage = $stockage;
        }
        return $this;

    }
    public function getChargement(): int
    {
        return $this->chargement;
    }
    public function setChargement(int $chargement): void
    {
        $this->chargement = $chargement;
    }
}