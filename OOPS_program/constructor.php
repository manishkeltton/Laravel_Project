<?php

   class Car{

       Var $wheel = 10;
       Var $hood = 20;
       Var $engine = 30;
       Var $door = 40;
       function __construct(){

           echo $this -> wheel = 15 . "\n";

       }

   }

   $bmw = new Car();
   $truck = new Car();
   $semi = new Car();

?>