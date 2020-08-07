<?php

   class Car
   {
       Var $wheels =4;
       Var $hood = 1;
       Var $engine = 1;
       Var $door = 4;

       function MoveWheels(){
           $this -> wheels = 10;
           $this -> door = 20;
       }
   }

   $bmw = new Car();
   $truck = new Car();
    
   echo $bmw -> wheels . "<br>";
   echo $truck -> wheels =10 . "<br>";
   echo $truck -> door;
   

?>