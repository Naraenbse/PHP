<html>
    <body>
        <?php
        //INTEGER
        $x= 245;
        var_dump($x);
        echo "<br>";

  //is_int() function checks the variable is integer.
        $x = 245;
        var_dump(is_int($x));


        $y = 456.4543;
        var_dump(is_int($y));

        echo "<br>";

        //MAXIMUM INTEGER VALUE
        echo "Maximum Integer length: ";
        echo PHP_INT_MAX;
        echo "<br>";

        //MINIMUM INTEGER VALUE
        echo "Minimum Integer length:";
        echo PHP_INT_MIN;
        echo "<br>";

        //INTEGER SIZE
        echo "Interger size:";
        echo PHP_INT_SIZE;
        echo "<br><br>";

        //FLOAT

        $x=234.567;
        var_dump($x);
        echo "<br>";
        
     //MAXIMUM FLOAT VALUE
     echo "Maximum Float value:";
     echo PHP_FLOAT_MAX;
     echo"<br>";

     //MINIMUM FLOAT VALUE 
     echo "MINIMUM Float Value:";
     echo PHP_FLOAT_MIN;
     echo "<br>"; 

     //TOTAL DECIMAL DIGITS CAN BE USED
     echo "Total digits after decimal:";
     echo PHP_FLOAT_DIG;
     echo "<br>";

     //SMALLEST POSITIVE DIGIT THAT CAN BE ADDED
     echo "Smallest positive difference that can be added:";
     echo PHP_FLOAT_EPSILON;
     echo "<br><br>";

     //infinity

     $x = 1.9e411;
     var_dump(is_infinite($x));
     echo "<br>";
   // NAN (NOT A NUMBER)

$x = acos(2);

var_dump($x);
echo "<br>";
var_dump(is_nan($x));
echo "<br><br>";

 //function is used to check whether a variable is a number

 $x = 45;
 var_dump(is_numeric($x));
 echo "<br>";

 $x =499.32+100;
 var_dump(is_numeric($x));
 echo "<br>";

 $x = "poke";
 var_dump(is_numeric($x));
echo "<br><br>";

//function is used to get the integer value 

$x=43524342.675;
echo intval($x);
echo "<br>";
$y=984739.39483;
echo intval($y);

