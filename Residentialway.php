<?php

require_once 'Highway.php';

final class Residentialway extends Highway
{
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicles[] = $vehicle;
    }
}
