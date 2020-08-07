<?php

   $arr1=array("sat"=>24,"frid"=>25,"pok"=>30,"red","yellow");
   $arr2=array("a"=>1,"b"=>2,"c"=>3,"b"=>4);
   $merge_val=array_merge_recursive($arr1,$arr2);

   print_r($merge_val);

?>