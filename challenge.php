<?php
// 1. define a class for a car

class Car
{

// 2. Properties: brand, model, year, description, weight_kg
    public $brand;
    public $model;
    public $year;
    public $description;
    public $weight_kg;
    public $lbs = 2.20462;

// 3. Methods: name, weight_lbs, set_weight_lbs

    public function name()
    {
        return $this->brand . " " . $this->model . " " . $this->year . " " . $this->description . " " . $this->weight_kg;
    }

    public function weight_lbs()
    {
        return $this->weight_kg;
    }

    public function set_weight_lbs()
    {
        return $this->weight_kg * $this->lbs . " lbs";
    }
}

$car1 = new Car;
$car1->brand = "Honda";
$car1->model = "HRV";
$car1->year = 2018;
$car1->description = "Test";
$car1->weight_kg = 24;

$car2 = new Car;
$car2->brand = "Ford";
$car2->model = "Focus";
$car2->year = 2019;
$car2->description = "Test test test";
$car2->weight_kg = 35;

echo "<h1>Car's description </h1>" . $car1->name() . "<br/>";
echo "<h1>Car's weight in kg </h1>" . $car1->weight_lbs() . "<br/>";
echo "<h1>Weight in lbs</h1>" . $car1->set_weight_lbs() . "<br/>";
echo "<hr style='color:red'/>";
echo "<h1>Car's description </h1>" . $car2->name() . "<br/>";
echo "<h1>Car's weight in kg </h1>" . $car2->weight_lbs() . "<br/>";
echo "<h1>Weight in lbs</h1>" . $car2->set_weight_lbs() . "<br/>";

$class_methods = get_class_methods("Car");
echo "<hr/> Class methods:" . implode(", ", $class_methods) . "<br/>";
