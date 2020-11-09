<?php



final class ResidentialWay extends AbstractHighWay
{

    public function addVehicle($vehicle): void
    {

        if ($vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);}
    }
}