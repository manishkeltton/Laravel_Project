<?php

   $arr1 = array("p"=>"Dk","k"=>"sahil","Kellton","y"=>"yellow");
   $arr2 = array("l"=>"lamp","p"=>"Dk","Kellton");
   $unasso_val=array_intersect_uassoc($arr1,$arr2,strcasecmp);
   print_r($unasso_val);

?>