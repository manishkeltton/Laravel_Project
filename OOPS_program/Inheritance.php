<?php

class Car{

   Var $wheels = 10;
   Var $hood = 20;
   Var $engine = 30;
   Var $door =  40;

   function MoveWheels(){
       $this -> wheels = 15;
   }
   function CreateDoor(){
       $this -> door = 25;
   }

}

class plane extends Car
{
    Var $wheels = 20;
}
$bmw = new Car();
$jet = new plane();

echo $bmw -> wheels;



?>