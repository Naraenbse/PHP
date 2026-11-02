<html>
<body>
    <?php
    //CAST TO STRING
    $a=21; 
    $b=24.34;
    $c="hellow";
    $d=true; 
    $e= NULL;

$a =(string) $a;
$b =(string) $b;
$c =(string) $c;
$d =(string) $d;
$e =(string) $e;
 
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);

echo "<br><br>";

//CAST TO INTEGER 

$a = 21;
$b= 345.433;
$c= "21 km ";
$d="hellow";
$e="NULL";
$f="true";

$a=(integer) $a;
$b =(integer) $b;
$c =(integer) $c;
$d =(integer) $d;
$e =(integer) $e;
$f =(integer) $f;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br><br>";

//CAST TO FLOAT 

$a = 21;
$b = 23.45;
$c = "25 km";
$d = "km 45";
$e = true;
$f = "hellow";
$g = NULL;

$a = (float)$a;
$b = (float)$b;
$c = (float)$c;
$d = (float)$d;
$e = (float)$e;
$f = (float)$f;
$g = (float)$g;

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump($d);
echo "<br>";

var_dump($e);
echo "<br>";

var_dump($f);
echo "<br>";

var_dump($g);
echo "<br><br>";

//CAST TO BOOLEAN 

$a= 21;
$b=23.45;
$c=-5;
$c=true;
$d= "25 KM";
$e= NULL;
$f="hellow";
$g="";

$a = (boolean)$a;
$b = (boolean)$b;
$c = (boolean)$c;
$d = (boolean)$d;
$e = (boolean)$e;
$f = (boolean)$f;
$g = (boolean)$g;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br><br>";

//CASTING FOR ARRAY

$a=21;
$b=24.43;
$c="hellow";
$d=true;
$e=NULL;

$a =(array)$a;
$b =(array)$b;
$c =(array)$c;
$d =(array)$d;
$e =(array)$e;

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump($d);
echo "<br>";

var_dump($e);
echo "<br><br>";

//CAST TO OBJECT

$a=21;
$b=34.43;
$c="hellow";
$d=true;
$e=NULL;

$a =(object)$a;
$b =(object)$b;
$c =(object)$c;
$d =(object)$d;
$e =(object)$e;

var_dump($a);
echo "<br>";

var_dump($b);
echo "<br>";

var_dump($c);
echo "<br>";

var_dump($d);
echo "<br>";

var_dump($e);
echo "<br><br>";

//CAST FOR NULL

$a = 21;
$b = 23.45;
$c = true;
$d = "25 KM";
$e = "hellow";

$a = NULL;
$b = NULL;
$c = NULL;
$d = NULL;
$e = NULL;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
