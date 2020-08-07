<?php

    echo "-----Array Merge Function-----\n.<br>";
     $arr1 = array("color" => "red", 8,9);
     $arr2 = array("a","b","color"=>"green",4);
     
    $result = array_merge($arr1,$arr2);

    print_r($result);

?>   

<br><br>
<?php
  echo "-----Array pop-----\n.<br>";
  $arr1 = array( "saturday","Friday","Thursday","Wednesday","Tuesday","Monday");
  $res_val = array_pop($arr1);
  print_r($res_val);
  print_r($arr1);
?>
<br><br>
<?php
   echo "----Array Push----<br>";
   $arr1 = array("purple","pink","blue","white");
   $res_val = array_push($arr1,"red","green");
   print_r($arr1);
?>

<br><br>
<?php

    echo "----Array replace recursive & array replace----<br>";
    
    $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
    $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

    $basket = array_replace_recursive($base, $replacements);
    print_r($basket);
     echo '<br>';
    $basket = array_replace($base, $replacements);
     print_r($basket);

?>
<br><br>
<?php

  echo "--Array Random---<br>";
  $arr1 = array("Ajay","sandeep","vijay","pradeep");
  $input_keys = array_rand($arr1,2);
  echo $arr1[$input_keys[0]] . "\n";
  echo $arr1[$input_keys[1]] . "\n"; 

?>
<br><br>

<?php

   echo "--Array Reverse--<br>";
   $arr1 = array("color" => "red",2,array("yellow","Pink"));

   $reversed = array_reverse($arr1);
   $preversed = array_reverse($arr1,true);

   print_r($arr1);
   echo "<br>";
   print_r($reversed);
   echo "<br>";
   print_r($preversed);

?>

<br><br>

<?php

   echo "--Array search--<br>";
   $arr1 = array("a" => "apple" , "b" => "ball" , "c" => "call");
   $result1 = array_search("ball",$arr1);
   $result2 = array_search("call", $arr1);
   print_r($result1);
   echo "<br>";
   print_r($result2);

?>

<br><br>

<?php
   echo "--Array shift--<br>";
  $arr1 = array("orange", "banana", "apple", "raspberry");
  $fruits = array_shift($arr1);
  print_r($arr1);

?>

<br><br>

<?php

  echo "--Array slice--<br>";
  $arr1 = array(1,2,3,4,5);

  $out1 = array_slice($arr1,2);
  $out2 = array_slice($arr1,2,4);
  $uot3 = array_slice($arr1,-2,2);

  print_r($out1);
  echo "<br>";
  print_r($out2);
  echo "<br>";
  print_r($uot3);

?>

<br><br>

<?php

   echo "--Array splice--<br>";
   $input = array("red","green","blue","yellow");
   array_splice($input,2);
   var_dump($input);

   echo "<br>";
   $input = array("red","green","blue","yellow");
   array_splice($input,1,-1);
   var_dump($input);

   echo "<br>";

   $input = array("red","green","blue","yellow");
   array_splice($input,1,-1,array("black","maroon"));
   var_dump($input);
?>

<br><br>

<?php

   echo "--Array arsort--<br>";
   $arr1 = array("b" => "orange", "d" => "blue","a" => "red", "e" => "pink");
   arsort($arr1);
   foreach($arr1 as $key => $val){
      echo "$val<br>";
   }
?>

<br><br>

<?php

   echo "--Array asort--<br>";
   $arr1 = array("b" => "orange", "d" => "blue","a" => "red", "e" => "pink");
   asort($arr1);
   foreach($arr1 as $key => $val){
    echo "$val<br>";
 }
?>

<br><br>

<?php

   echo "--Array current,end etc--<br>";
   $arr1 = array("foot","bike","car","plane");
   $mode1 = current($arr1);
   print_r($mode1);
   echo "<br>";
   print_r(end($arr1));
   echo "<br>";
   print_r(prev($arr1));
   echo "<br>";
?>

