<?php

//EXAMPLE 1:
    
$favcolor = "green";
$text = match($favcolor) {
  "red" => "Your favorite color is red",
  "blue" => "Your favorite color is blue",
  "green" => "Your favorite color is green",
default =>"Your favorite color is neither red, blue and green",
};
echo "$text";
echo "<br>";

//EXAMPLE 2:

$days = 3;

$text = match($days){
    1,2,3 => " will  not decalred as holiday",
    4,5,6,7 => " will be decalred  as holiday",
    default => "not valid"

};
echo "$text";


?>