<?php



final class PedestrianWay extends AbstractHighWay
{



    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            return $this->currentVehicles($vehicle);
        }
    }
}