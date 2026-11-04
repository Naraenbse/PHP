<?php
 
//ADDS A SINGLE ARRAY TERM

$fruits = array("orange","strawberry","apple");
$fruits [] = "dragon fruit" ;
var_dump($fruits);
echo "<br>";

// ADDS IN ASSOCIATIVE ARRAY
 $cars =array("brand"=>"BMW" , "model" => "M5");
$cars ["color"] ="red";

 var_dump($cars);
 echo "<br>"; 
 

 //ARRAY_PUSH () FUNCTION

 $fruits = array("apple","orange","strawberry");
 array_push($fruits, "grapes","banana");//for adding multiple values inside 

 var_dump($fruits);
  echo "<br>"; 

//ARRAY_PUSH FOR ASSOCIATIVE ARRAY
$cars =array("brand"=>"BMW" , "model" => "M5");
$cars +=["color" => "red", "year" => "2005"];//used for adding multiple values in  associative array


var_dump($cars);
echo "<br>";

//ARRAY_UNSHIFT() FUNCTION
$fruits = array("Apple", "Banana", "Cherry");
array_unshift($fruits, "Orange", "Kiwi", "Lemon");//used fop adding the value first
var_dump($fruits);

echo "<br>";

 //ARRAY_MERGE ()FUNCTION 

 $fruits1 = array("orange", "kiwi");
 $fruits2 = array("banana","apple");

 $fruits = array_merge($fruits1,$fruits2);
 var_dump($fruits);
?>