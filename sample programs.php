<?php

//IFELSE TEST

//Write a PHP program to check whether a number is even or odd.
$x=27;
if($x % 2 == 0){
  echo "even number";
}else{
    echo "odd number";
}
echo "<br>";
//Write a PHP program to find the largest of three numbers.
$x = 20;
$y = 25;
$z = 30;
$maxNumber = max($x, $y, $z);
echo "the highest number: $maxNumber\n";
echo "<br>";

//Write a PHP program to check whether a student passed or failed.

$student_mark = 65;
if($student_mark <= 60){
    echo "the student is fail";
}else {
    echo "student is pass";
}
echo "<br>";

// Write a PHP program to check whether a number is positive, negative, or zero

$x = "0";
if($x > 0){
    echo "this is positive number: $x\n";
}else if($x < 0){
    echo "this is a negative number: $x\n";
}else{
    echo "this is null";
}
echo "<br>";
//Write a PHP program to calculate grades based on marks.

$x =55;
if($x >= 70){
    echo "you are A GRADE";
}else if ($x >= 50  && $x <=70){
    echo "you are b grade";
}else{
    echo "you are fail";
}
echo "<br>";

//LOOPS

// Print numbers from 1 to 10.
$x =1;
for($x=0; $x < 10; $x++){
    echo $x. "<br>";
}

//Print the multiplication table of a given number.
$num =5;
for ($x=1; $x < 50; $x++){
    echo $num ."x". $x."=";
    echo ($num * $x)."<br>";
}
echo "<br>";

//Find the sum of numbers from 1 to 100.
$sum =1;
for($x=1; $x <=100; $x++){
      $sum +=$x;
}
echo "the sum of numbers:$sum";
echo "<br>";


//Print all even numbers from 1 to 50.

for($x = 2; $x < 50; $x+=2){
    echo $x."<br>";
}
echo "<br>";

//Find the factorial of a number.

$factorial = 10;

for($x = 1; $x < 20; $x++){
    $factorial *=$x;
    echo $factorial."<br>";
}
echo "<br>";

//FOREACH LOOP

// Display all elements in an array

$colors = array("red","blue","green");

foreach ($colors as $value){
    echo $value . "<br>";
}
echo "<br>";

// Print student names using a foreach loop

$students= array("mikey","takemichy","draken");
foreach($students as $names){
    echo  $names."<br>";

}
echo "<br>";

//Display array values

$students =array("mikey" => 20 ,"draken" => 26 , "takemichy" => 18);
asort($students); // for values
echo "<pre>";
print_r($students);
echo "</pre>";
echo "<br>";

//Display array keys 
$students= array("mitsuya" =>20 , "baaji" => 24 , "kazhitora" => 22, "Akastuma" => 20);
ksort($students);
echo "<pre>";
print_r($students);
echo "<pre>";

// Calculate the total marks of students stored in an array

$student_marks = [
    "eng" => 50,
    "maths" => 60 ,
    "physics" => 70,
    "chemistry" => 80,

];
$total_marks = 0;
foreach ($student_marks as $subject => $mark) {
    $total_marks += $mark;
}
echo "Total Marks Obtained: " . $total_marks;

echo "<br>";

// Display product names and prices using an associative array.

$cars =array("CARROT" => "350", "ORANGE" => "50" , "BETROOT"  =>"202" , "STRAWBERRY" => "75");
echo "<pre>";
print_r($cars);
echo "<pre>";
echo "<br>";

//WHILE LOOP 

//Print numbers from 1 to 10.

$x = 0;
while($x < 10 ){
    echo $x;
$x++;

}
echo "<br>";
//Find the sum of digits of a number.

$x =1;
$sum = 0;
while ($x <50){
    $sum += $x;
    $x++;
echo "<pre>";
print_r($sum);
echo "<pre>";
}
echo "<br>";

//Reverse a given number.


function printReverseNums($n) {
    $i = $n;
    while ($i >= 1) {
        echo $i . " ";
        $i--;
    }
}

printReverseNums(10);
echo "<br>";

// Print the multiplication table of a number.
$num = 4;
$x=1;
while($x <10){
    echo $num."x".$x."=".($num*$x). "<br>";
    $x++;

}
echo "<br>";

// Count the number of digits in a number.

$count = 1;
while($count < 10){
    echo "the total number $count. <br>";
    $count++;

}
echo "<br>";

//DOWHILE 

// Print numbers from 1 to 10.
$x =1;
do{
    echo $x. "<br>";
    $x++;

}while ($x <=10);
echo "<br>";

// Display the multiplication table of a number.
$num =6;
$x= 1;
do{
    echo $num."x".$x."=".($num *$x)."<br>";
    $x++;
}while($x < 20);

echo "<br>";

//Find the sum of numbers from 1 to 50
$x = 1;
$sum= 0;
do{
    echo "the sum is : $sum  <br>";
    $sum += $x;
    $x++;
}while($x <= 50);

echo "<br>";

//Print all odd numbers from 1 to 20

$x=1;
do {
    echo "odd number :$x <br>";
    $x +=2;

}while($x < 20);
echo "<br>";

// ARRAY

//Create an array of five numbers and display them

$numbers = array(1,2,3,4,5,6);
echo "<pre>";
print_r($numbers);
echo "<pre>";
echo "<br>";

// Find the largest element in an array.

$numbers = array(34,54,334,23,24,55,233);
$max_numbers = max($numbers);
echo "<pre>";
print_r($numbers);
echo "<pre>";

echo "the largest number :$max_numbers . <br>";
echo "<br>";

// Find the smallest element in an array.

$numbers = array(34,43,22,45,33,23,4);
$minimum_numbers =min($numbers);
echo "<pre>";
print_r($numbers);
echo "<pre>";
echo "the minimum number : $minimum_numbers .<br>";
echo "<br>";

// Calculate the sum and average of array elements.

$numbers =array (55,65,76,43,44);

$sum = array_sum($numbers);

$average = $sum / count($numbers);

echo "the sum of numbers: $sum. <br>";
echo "the average if the numbers: $average";
echo "<br>";

// Sort an array in ascending order.

$x = array(34,23,45,33,44,32);
asort($x);
echo "<pre>";
print_r($x);
echo "<pr>";
echo "<br>";

//Remove duplicate values from an array.
$x = array (1,2,3,1,2,3,4,5,6,4,3,2,1);
$result = array_unique($x);
print_r($result);
echo "<br>";

//sample2 

$x = array("banana","apple", "orange","banana","pineapple");
$result = array_values(array_unique($x));
print_r($result);
echo "<br>";

// Create an associative array for student details

$student_details= array("NAME" => "NARAEN", "ROLL NO" => "24", "DEPARTMENT" => "BIO-TECH");
echo "<pre>";
print_r($student_details);
echo "<pre>";

// Store student marks and calculate the average.

$student_marks = array("MATHS"=> "67" , "ENGLISH" => "78" , "MATHS" => "96", "COMPUTER" => "56");
$sum= array_sum($student_marks);
$average = $sum / count($student_marks);

echo "the average of this student is :$average .<br>";
echo "<br>";

// Search for an element in an array.

$cars = array("MODEL" =>"M5" , "BRAND" => "BMW" , "COLOR" =>"GREEN ");
echo $cars ["BRAND"];
?>