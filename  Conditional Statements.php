<?php
 //IF STATEMENTS
  $temperature =25;
  if($temperature > 0 and $temperature < 30){
    echo "nice climate";
     echo"<br>";

  }

  //IF STATEMENT
  $x = 14;
if ($x < 20) {
  echo "Have a good day";
}
echo "<br>";

//IF ELSE STATEMENT

$x = date(10);
if($x <=15){
    echo "have a nice day";
}else{
    echo "have a moderate day";
}
echo "<br>";

//IF,ELSEIF AND ELSE STATEMENT
$x = date(35);

if($x <= 10){
    echo "have a good day";
}else if ($x <= 20) {
    echo "have a good evening";

}else {
    echo "have a great night";
}
echo "<br>";
//SHORTHAND IF STATEMENTS

$a = 25;

if ($a < 30) $b = "SHORTHAND IF";

echo $b;
echo "<br>";

//SHORTHAND IF ELSE STATEMENTS 

$a =5;

$b = $a < 10 ?"good morning" : "good night";
echo $b;
echo "<br>";

//NESTED IF

$number = 20;
if ($number > 10) {
    echo "the number is greater than 10";
    if ($number > 30){
        echo "the number is greater than 20";

    }else{
        echo " number is not above 30";
    }
}

?>