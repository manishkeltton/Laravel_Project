<?php

   $arr1=array("Apple"=>2,"Mango"=>6,"Banana"=>7,"Pumpkin");
   $arr2=array("Apple"=>2,"Pumpkin");
   $key_val=array_diff_key($arr1,$arr2);
   print_r($key_val);

?>