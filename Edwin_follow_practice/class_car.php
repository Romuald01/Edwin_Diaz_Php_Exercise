<?php
class Car {

    public $wheels = 4001; 
    protected $hoods = 1; 
    private $engine = 1; 
    var $doors = 4; 
    static $tyres = "toyota";

    
    // methods
    function MoveWheels() {
    $this->wheels = 30;
    }

    // static
    function staticFunction() {
        $this->vehicle = 20;
    }
// static method example and in static method we use dollars sign with variable when invoking 
function staticMethod() {
    Car::$tyres = 24;
}
    // private
    function showProperty() {
       echo $this->engine;
    
    }

    // function CreateDoors() {
    //     $this.$doors = 6; 
    // }
// constructor
    function __construct() {
        echo $this->hoods = 21;

    }
    function engineType() {
       echo $this->engine = "2021 model awd";
    }


} //class ends
$bmw = new car();

// echo $bmw->showProperty();
// $veh = new car();
// echo "<br>" . car::$vehicle . "<br>" ;
// static method
// $staMethod = new car();
Car::staticMethod();
echo Car::$tyres;

// protected
class semi extends car {

    function showProperty() {
        echo "<br>" . $this->hoods;
         
     }

}

// $semi = new semi();
// echo "<br>" . $semi->showProperty();
// $eng = new car(); 
// echo $eng->showProperty();
// $eng->engineType();
// echo "<br>" . $eng->hoods . "<br>";
// if(class_exists("Car")){
//     echo "the car class exists" . "<br>";
// }else{
//     echo "the car class doesn't exists";
// }

// if(method_exists("car","radio")){
//     echo "method exists";

// }else{
//     echo "method did not exists";
// }

$bmw = new Car();  //creation of a new instance of a class  
// $merced_benz = new car(); we can create as many as instance we want.
// $truck = new car();
// $bmw->MoveWheels();
// echo $bmw->wheels . "<br>";
// echo $truck->wheels = 15 . "<br>";
// echo $truck->$doors;

// inheritance
// class Plane extends Car  {
//     var $wheels = 40;
// }

// $bmw = new car();    
// $jet = new plane();   //instance 
// echo $jet->wheels . "<br>";
// // $jet->MoveWheels();
// echo $jet->MoveWheels();
// if(class_exists("plane")) {
//     echo "plane class exits"; 
// } 




?>











