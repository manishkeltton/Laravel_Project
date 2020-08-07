<?php
  $str_arr = array("Sunday"=>1,"Monday"=>2, "Tuesday"=>3, "Wednesday"=>4 ,"Thursday"=>5, "Friday"=>6,"Saturday"=>7);

    print_r(array_change_key_case($str_arr, CASE_UPPER));
?>