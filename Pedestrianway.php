<?php

require_once 'Highway.php';

final class Pedestrianway extends Highway
{
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) 
        {
            $this->currentVehicles[] = $vehicle;
        } else {
            return 'You can\'t drive here!! Go away!';
        }
    }
}