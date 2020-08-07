<?php
   $arr1=array("g"=>"green","p"=>"pink","A","B");
   $arr2=array("p"=>"green","B");
   $intersect_val=array_intersect($arr1,$arr2);
   print_r($intersect_val);
?>