<?php
//INDEXED ARRAY: 
$cars= array("BMW","AUDI","BENZ");
echo "<pre>"; print_r($cars);

exit;
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
echo "<br>";

//MULTDIMENSIONAL ARRAY

$cars = array(
    array("BMW", 21, 15),
    array("AUDI", 25, 10),
    array("BENZ", 25, 10),
    array("LAND ROVER", 25, 10)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";

echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";

echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo "<br>";


//LOOPING IN MULTIDIMENSIONAL ARRAY

$$cars = array (
  array("Volvo",22,87),
  array("BMW",15,43),
  array("Saab",59,24),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>