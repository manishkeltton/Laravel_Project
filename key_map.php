<?php
function value_1_2($n, $m)
{
    return "The number {$n} is called {$m} ";
}

function key_value($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['p', 'b', 'c', 'd', 'e'];

$c = array_map('value_1_2', $a, $b);
print_r($c);

$d = array_map('key_value', $a , $b);
print_r($d);
?>