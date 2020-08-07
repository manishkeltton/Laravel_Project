<?php
   $arr1=array("a"=>"apple","c"=>"cat","red","blue","red");
   $arr2=array("a"=>"apple","red","yellow");
   $diff_val=array_diff($arr1,$arr2);
   print_r($diff_val);
?>