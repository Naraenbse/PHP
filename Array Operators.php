<?php
 //UNION 
$x =array("a" => "red" , "b" => "yellow");
$y = array("c" => "green" , "d" => "pink");

print_r($x + $y); //ADDING BOTH $X AND $Y 
echo "<br>";

//EQUALITY
$x =array("a" => "red" , "b" => "yellow");
$y=array ("c" => "green" , "d" => "blue");

var_dump($x == $y); //	Returns true if $x and $y have the same value 
echo "<br>";

//IDENTITY
$x = array ("a" => "mikey" , "b" => "draken");
$y = array ("c" => "kazhitora" ,"d" => "takemichy");

var_dump($x === $y); //Returns true if $x and $y have the same value pairs in the same order and of the same types	

echo "<br>";

//INEQUALITY (!=)
$x = array ("a" => "mikey" , "b" => "draken");
$y = array ("c" => "kazhitora" ,"d" => "takemichy");

var_dump($x != $y);//RETURNS TRUE IF $X IS NOT EQUAL TO $Y
echo "<br>";

//INEQUALITY (<>)

$x = array ("a" => "mikey" , "b" => "draken");
$y = array ("c" => "kazhitora" ,"d" => "takemichy");

var_dump($x <> $y);//RETURNS TRUE IF $X IS NOT EQUAL TO $Y
echo "<br>";

//NON-IDENTITY

$x = array ("a" => "mikey" , "b" => "draken");
$y = array ("c" => "kazhitora" ,"d" => "takemichy");

var_dump($x !== $y);//RETURNS TRUE IF $X IS NOT IDENTICAL  TO $Y
echo "<br>";



?>