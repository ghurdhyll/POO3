<?php
include_once 'Bicycle.php';
include_once 'Car.php';
include_once 'Truck.php';
include_once 'ResidentialWay.php';
include_once 'PedestrianWay.php';
include_once 'MotorWay.php';
// $bike = new Bicycle('blue', 1);

// var_dump($bike) . PHP_EOL;

// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake() . '<br>';

// $renaultZoe = new Car('gray', 4, 'electric');

// // $renaultZoe->startStop() . '<br>';

// var_dump($renaultZoe) . PHP_EOL;

// echo $renaultZoe->forward() . '<br>';
// echo '<br> Vitesse de la voiture : ' . $renaultZoe->getCurrentSpeed() . ' km/h' . '<br>';
// echo $renaultZoe->brake();
// echo '<br> Vitesse de la voiture : ' . $renaultZoe->getCurrentSpeed() . ' km/h' . '<br>';

$foodTruck = new Truck(150, 'red', 3, 'electric');

echo $foodTruck->forward() . '<br>';
echo '<br> Vitesse du camion : ' . $foodTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $foodTruck->brake();
echo '<br> Vitesse du camion : ' . $foodTruck->getCurrentSpeed() . ' km/h' . '<br>';

var_dump($foodTruck) . '<br>';

echo $foodTruck->isTruckFull() . '<br>';
$foodTruck->setloadCharge(150);
echo $foodTruck->isTruckFull() . '<br>';
