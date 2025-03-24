<?php

interface VehicalInterface {
    public function startEngine();
    public function stopEngine();
}
class Car implements VehicalInterface {
    public function startEngine() {
        echo "Welcome to the car"."<br>";
    }

    public function stopEngine() {
        echo "Get out of the car"."<br>";
    }
}

class Bike implements VehicalInterface {
    public function startEngine() {
        echo "Welcome to the bike"."<br>";
    }

    public function stopEngine() {
        echo "Get out of the bike"."<br>";
    }
}

$obj = new Car;
$obj->startEngine();
$obj->stopEngine();
$obj1 = new Bike;
$obj1->startEngine();
$obj1->stopEngine();

?>