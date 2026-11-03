<?php

 // AND OPERATOR (&&)
  
$temperature = 24;

if ($temperature >= 0 && $temperature <= 30) { //Executes because both are true
    echo "The weather is good"; 
}
echo "<br>";

//OR OPERATOR (||)
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) { //EXECUTES BEACUSE ATLEAST ONE IS TRUE
    echo "Hellooww";
}
echo "<br>";

//XOR OPERATOR 

$x = 50;
$y = 65;

if ($x == 50 XOR $y == 55){ // EXECUTES ONLY IF ONE OF THEM ARE TRUE IF BOTH ARE TRUE IT WILL NOT WORK 
    echo "hellowww123";

}

//NOT OPERATOR
$x = 100;  

if (!($x == 90)) { //IF THE CONDITION IS NOT TRUE THE CODE WILL RUN 
    echo "HelloWW456";
}
?>
