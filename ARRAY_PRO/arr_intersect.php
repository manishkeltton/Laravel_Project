<?php
   
   $arr1=array("p"=>"pop","k"=>"kite","c"=>"com","v"=>"value","red","yellow");
   $arr2=array("s"=>"short","k"=>"kite","red");
   $intersect_val=array_intersect_assoc($arr1,$arr2);
   print_r($intersect_val);

?>