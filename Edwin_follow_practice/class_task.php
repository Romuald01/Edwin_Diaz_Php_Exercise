<?php

class Dog {

    var  $eyeColors = 2;
    var  $noseColor = "black";
     var $furColor = "green";


     function showAll() {
         echo $this->eyeColors . " "  . $this->noseColor ." " . $this->furColor;
     }

}
$pitbull = new Dog();
$pitbull->showAll();




?>