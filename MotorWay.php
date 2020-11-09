<?php



final class MotorWay extends AbstractHighWay
{


    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Vehicle){
            return $this->currentVehicles($vehicle);}
    }

}