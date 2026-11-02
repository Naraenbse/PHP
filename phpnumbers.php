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