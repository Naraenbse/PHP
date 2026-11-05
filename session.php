<?php
session_start();
?>

<?php

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
echo "<br>";
?>

<?php
//Retrieve PHP Session Variable Values

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";



//MODIFY SESSION 

$_SESSION["favanimal"] = "lepard";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";
echo "<br>";


// remove all session variables

session_unset();
echo "remove the session variables";
echo "<br>";

//// destroy the session
session_destroy();
echo "destory the total session";
echo "<br>";
?>

