<?php
//INDEXED ARRAY: 
$cars= array("BMW","AUDI","BENZ");
var_dump($cars);
echo "<br><br>";

// 1)ACCESS ARRAY ITEM 
$fruits = array("apple","orange","dragon fruit");
echo $fruits[0]; 
echo "<br><br>";

// 2)CHANGE VALUE OF ARRAY ITEM 
$cars = array("BMW","AUDI","FERRARI");
 $cars[2] = "BENZ";
var_dump ($cars);
echo "<br><br>";

// 3)LOOP THROUGH A INDEXED ARRAY 

$names =array ("bachira","isagi","nagi");
foreach ($names as $x){
    echo "$x <br>";
}
echo "<br><br>";


//ASSOCIATIVE ARRAY :

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo "<br>";

$icecream = array("brand"=>"arun", "piece"=> "cone", "taste" => "nice");
var_dump($icecream);
echo "<br><br>";

// 1) ACCESS ARRAY  ITEM 

$cars = array("brand" => "BMW" , "MODEL" => "M5" , "YEAR" => "2023");
 echo $cars ["MODEL"];
echo "<br>";
 // 2)CHANGE THE VALUE OF THE ARRAY ITEM 
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
echo "<br><br>";

// 3)LOOP THROUGH A INDEXED ARRAY 

$cars =array ("BRAND" => "BMW" , "MODEL" => "M5" , "YEAR" => "2024");
foreach ( $cars as  $x =>  $y ) {
    echo "$x:$y  <br>";
} 

?>