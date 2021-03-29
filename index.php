<?php

require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
var_dump(Car::ALLOWED_ENERGIES);
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

require_once 'Truck.php';
$truck = new Truck(50, 'black', 3, 'electric');
echo $truck->forward();
echo $truck->brake();
echo $truck->loading(60);
var_dump($truck);

$truck2 = new Truck(60, 'blue', 4, 'fuel');
echo $truck2->forward();
echo $truck2->brake();
echo $truck2->loading(10);
var_dump($truck2);