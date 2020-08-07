<?php

   $arr1 = array("x"=>"Red","y"=>"yellow","z"=>"purple",2);
   $arr2 = array("t"=>"green","y"=>"yellow",2);
   $assoc_val=array_diff_assoc($arr1,$arr2);
   print_r($assoc_val);

?>