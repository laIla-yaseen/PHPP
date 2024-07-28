<?php
class Car {
    private $make;
    private $model;
    private $vin;

    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }

    public function __destruct() {
        echo "Car object with VIN {$this->vin} is being destroyed.\n";
    }

    public function getDetails() {
        return "Make: {$this->make}, Model: {$this->model}, VIN: {$this->vin}";
    }

    public function getMake() { 
        return $this->make;
    }

    public function setMake($make) {
        $this->make = $make;
    }

    public function getModel() { 
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function getVin() {
        return $this->vin;
    }

    public function setVin($vin) {
        $this->vin = $vin;
    }
}

class Inventory {
    private $cars = array();

    public function addCar(Car $car) {
        $this->cars[$car->getVin()] = $car;
    }

    public function removeCar($vin) {
        if (isset($this->cars[$vin])) {
            unset($this->cars[$vin]);
        } else {
            echo "Car with VIN $vin not found.\n";
        }
    }

    public function listCars() {
        if (empty($this->cars)) {
            echo "No cars in inventory.\n";
        } else {
            foreach ($this->cars as $car) {
                echo $car->getDetails() . "\n";
            }
        }
    }
}


echo "<br>";
$car1 = new Car("Toyota", "Corolla", "1234567890");
echo "<br>";
$car2 = new Car("Honda", "Civic", "0987654321");
// echo "<br>";
// $inventory = new Inventory();
// echo "<br>";
// $inventory->addCar($car1);
// echo "<br>";
// $inventory->addCar($car2);
// echo "<br>";
// $inventory->listCars();
// echo "<br>";
// $inventory->removeCar("1234567890");
// echo "<br>";
// $inventory->listCars();
// echo "<br>";
// unset($car1);
// unset($car2);

