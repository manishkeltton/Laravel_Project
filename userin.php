<?php
echo "What do you want to input? ";
$input1 = rtrim(fgets(STDIN));
$input2 = rtrim(fgets(STDIN));
$a = $input1 + $input2;
echo "I got it:" . $a;
?>