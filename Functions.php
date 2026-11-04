<?php

//  FUNCTION
function mysample(){
    echo "sample function program";

}
mysample();
echo "<br>";

//FUNCTION PARAMETERS
function samplefamily($fname){
    echo "$fname.is my name <br>" ;
}

 samplefamily("manjiro sana ");
 samplefamily("draken ");
 samplefamily("mitsuya");
 samplefamily("baaji ");
 samplefamily("kazhitora");

//DEFAULT VALUE PARAMETER 

function setheight($height = 150){
    echo "my height is: $height <br>";
}

setheight(200);
setheight();
echo "<br>";


//RETURN STATEMENT
function sum($x,$y) {
    $z= $x + $y;
    return $z ;   
}
 echo  "5+10 =".sum (5,10). "<br>";
 echo "25+654 =".sum(25,654) ."<br>";
 echo "10+23 =".sum(10,23);
?>