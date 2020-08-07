<?php

   class Car 
    {
        
       function MoveWheels(){
           echo "Wheels move";
       }   
    
    }

    $bmw = new Car();
    $mercez_benz = new Car();
    $bmw -> MoveWheels();
    $mercez_benz -> MoveWheels();
   

?>