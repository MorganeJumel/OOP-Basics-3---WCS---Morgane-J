<?php

require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'Motorway.php';
require_once 'Pedestrianway.php';
require_once 'Residentialway.php';

$motorway = new Motorway();
$motorway->setNbLane(4);
$motorway->setMaxSpeed(130);
$motorway->addVehicle(new Car('white', 4, 'electricity'));
$motorway->addVehicle(new Bicycle('grey', 1));
var_dump($motorway);

$pedestrianway = new Pedestrianway();
$pedestrianway->setNbLane(1);
$pedestrianway->setMaxSpeed(10);
var_dump($pedestrianway);

$residentialway = new Residentialway();
$residentialway->setNbLane(2);
$residentialway->setMaxSpeed(50);
var_dump($residentialway);


