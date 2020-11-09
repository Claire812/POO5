<?php


abstract class AbstractHighWay
{
    protected $currentVehicles;
    protected $nbLane;
    protected $maxSpeed;
    protected $vehicle;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle($vehicle);

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     * @return AbstractHighWay
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param mixed $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


}