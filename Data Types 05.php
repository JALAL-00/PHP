/* PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource */

//Geting data types
<?php
$x = 5;
var_dump($x);
?>

//PHP String
<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

//PHP Integer
<?php  
$x = 5985;
var_dump($x);
?>

//PHP Float
<?php  
$x = 10.365;
var_dump($x);
?>

//PHP Boolean
<?php 
$x = true;
var_dump($x);
?>

//PHP Array
<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?> 

//PHP Object
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

//PHP NULL Value
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

//Change Data Type
<?php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);
?> 

