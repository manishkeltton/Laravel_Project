<?php

  class Car
  {
      public $wheels = 4;
      protected $hood = 1;
      private $engine = 5;
        Var $door = 10;

      function __showProperty(){

        echo $this->door=10;

      }
  }
//   class Semi extends Car{

//     }  

    $bmw = new Car();
    //$semi = new Semi()
  // echo $bmw -> showProperty();
   
  

?>