<?php
//EQUAL
$x =50;
$y = 50;

var_dump($x == $y);
echo "<br>";

//	IDENTICAL

$x = 150;
$y = 150;

var_dump($X === $y);
echo "<br>";

//NOT EQUAL

$x = 50;
$y = 45;

var_dump($x != $y); //	Returns true if $x is not equal to $y IF NOT FALSE
echo "<br>";

//NOT EQUAL

$x = 18;
$y = 21;

var_dump($x <> $y); //	Returns true if $x is not equal to $y IF NOT FALSE

//NOT IDENTICAL

$x = 18;
$y = "18";

var_dump( $x !== $y); //RETURNS TRUE IF THE NUMBER DIFFERS OR NOT THE SAME TYPE IF NOT FALSE
echo "<br>";

//GREATER THAN
$x = 95;
$y = 65;
var_dump($x > $y); //RETURNS TRUE IF $X IS GREATER THAN $Y IF NOT FALSE
echo "<br>";

//LESSER THAN
$x = 30;
$y = 75;

var_dump($x < $y); //RETURNS TRUE IF $X IS LESSER THAN $Y IF NOT FALSE
echo "<br>";

//GREATER THAN OR EQUAL TO

$x = 45;
$y =45;

var_dump($x >= $y); //RETURNS TRUE IF $X IS GREATER OR EQUAL TO $Y IF NOT FALSE 
echo "<br>";

//LESSER THAN OR EQUAL TO

$x = 43;
$y = 43;

var_dump($x <= $y); //RETURNS TRUE IF $X IS LESSER THAN OR EQUAL TO $Y IF NOT FALSE 
echo "<br>";

//SPACESHIP 

$x = 10;
$y = 20;

var_dump($x <=> $y); //RETURNS -1 BEACUSE $X IS LESSER THAN $Y
echo "<br>"; 

$x =10;
$y =10;

var_dump($x <=> $y); //RETURNS 0 BECAUSE $X IS EQUAL TO $Y
echo "<br>";

$x = 20;
$y = 10;

var_dump($x <=> $y); //RETURNS 1 BEACUSE $X IS GREATER THAN $Y
echo "<br>";
?>