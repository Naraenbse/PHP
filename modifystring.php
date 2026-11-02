<html>
    <body>
        <?php
// it converts the lowercase letters into uppercase letters
 $x ="converts into uppercase letters";
 echo strtoupper($x);
echo "<br>";

//it converts the uppercase letters into the lowercase letters
$x="CONVERTS into LOWECASE LETTERS";
echo strtolower($x);
echo "<br>";

// it converts the first letter of the string into uppercase letter
$x="converts the the first letter into uppercase letters";
echo ucfirst($x);
echo "<br>";

//it converts the first letter into lowercase letter 
$x ="CONVERTS THE FIRST LETTER INTO LOWERCASE LETTER";
echo lcfirst($x);
echo "<br>";

//it replaces the specifc word into a another word
$x ="virat and bhuvi are the best";
echo str_replace("bhuvi","rohit",$x);
echo "<br>";

//it is used to reverse the string
$x="vimsoke Sanji";
echo strrev($x);
echo "<br>";

//explode used to split the string into an array 
$x ="visca barca,neymar,messi,suarez";
print_r(explode(",", $x));
echo "<br>";


//used to trim the string remove the extra whitespace

$x="   hellow visca barca   ";
echo trim($x);
echo "<br>";

echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?>
</body>
</html>
