<?php
   $arr1=array("y"=>15,"blue"=>35,"red"=>25,"sky"=>10);
   $arr2=array("blue"=>35,"y"=>"15",5,20);
   $key_val=array_intersect_key($arr1,$arr2);
   print_r($key_val);
?>