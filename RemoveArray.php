<?php

//ARRAY_SPLICE FUNCTION 

$fruits = array(  "orange", "kiwi" , "banana");
array_splice($fruits, 1,1);// REMOVES SINGLE VALUE
var_dump($fruits);
echo "<br>";

//ARRAY_SPLICE FUNCTION
$fruits = array(  "orange", "kiwi" , "banana");
array_splice($fruits, 1,2);// REMOVES MULTIPLE VALUE
var_dump($fruits);
echo "<br>";

//UNSET()FUNCTION 

$cars = array ("bmw","audi","benz");
unset($cars[2]);// REMOVES THE VALUE AND IN INDEX NO CHANGES WILL HAPPEN 

var_dump($cars);
echo "<br>";

$cars = array ("bmw","audi","benz");
unset($cars[2] ,$cars[1]);// REMOVES THE MULTIPLE VALUE AND IN INDEX NO CHANGES WILL HAPPEN 

var_dump($cars);
echo "<br>";


// ARRAY_POP()
$fruits = array("orange","kiwi","banana");
array_pop($fruits);

var_dump($fruits);

?>