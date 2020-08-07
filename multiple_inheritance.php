<?php
interface father
{
public function parent1_method();
}
interface mother
 {
public function parent2_method();
}
class child implements father, mother
{

   function parent1_method()
 {
   echo "\n Interface father";
   }

   function parent2_method()
 {
   echo "\n Interface mother";
   }
 
  
}
$test = new child();
$test->parent1_method();
$test->parent2_method();

?>