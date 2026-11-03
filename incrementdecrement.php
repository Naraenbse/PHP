<?php

//INCREMENT 
$x = 10;
$y = ++$x;  // $x becomes 6 first  then 6 is assigned to $y
echo "x: $x, y: $y";
echo "<br><br>";

//POST INCREMENT 
$x = 5;
$y = $x++;  // 5 is assigned to $y first, then $x becomes 6
echo "x: $x, y: $y"; 
echo "<br><br>";

//DECREMENT 
$x = 25;
$y = --$x; // $X FIRST BECOME 24 AND THEN IT WILL ASSIGN TO $Y
echo "x: $x, y: $y";
echo "<br><br>";

//POST DECREMENT
$x = 25;
$y = $x--; //25 IS ASSIGNED TO  $Y FIRST THEN $X BECOMES 24

echo "x: $x, y: $y";
?>