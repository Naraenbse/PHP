<?php
 //WHILE LOOP
$x = 1;
while($x < 10){
  echo $x ;
$x++;
  
}
echo "<br>";
//BREAK THE WHILE LOOP 

$x = 1;

while ($x < 10) {
  if ($x == 5) break;  
  echo $x;
  $x++;
} 
echo "<br>";

//CONTINUE THE WHILE LOOP

$x=1;

while($x < 10){
     $x++;

    if ($x == 5)continue;
    echo $x;
}
echo "<br>";


//DO WHILE 

$x =1;

do {
    echo $x;
    $x++;
} while ($x < 6);
echo "<br>";

//DO WHILE BREAK 
 
$x = 1;

do{
    if($x == 5) break;
        echo $x;
        $x++;

    
}while($x < 10);
echo "<br>";


//CONTINUE IN DO WHILE
$x = 1;

do{
    $x++;
    if($x == 5) continue;
    echo $x;

}while($x < 10);
echo "<br>";
echo "<br>";



//FOR LOOP

//COUNTING UP
for($x =0; $x < 10; $x++){
    echo "the number is: $x <br>";
}
echo "<br>";

//COUNTING DOWN 
for($y = 5; $y >=2; $y--){
    echo "the number is :$y <br>";
}
echo "<br>";

 //CUSTOM VALUE
 for($x =0; $x <=10; $x+=2){
    echo "the even number :$x <br>";

 }
echo "<br>";
 //FOR EACH 

 //SAMPLE1
 $colors = array("green","red","blue","orange");

foreach ($colors as $values){
     echo "$values  <br>";
}
echo "<br>";
//SAMPLE 2
$customers = array("arjun" => "20", "zenitsu" => "25", "tanjiro" => "25");

foreach ($customers as $key => $value){
    echo "$key : $value <br>";
}




