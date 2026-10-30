<!DOCTYPE html>
<html>
<body>

<h2>Local Scope</h2>

<?php
function myFunction() {
  $x = "hello php";
  echo "Variable x inside function is: $x<br>";
} 
myFunction();
echo "Variable x outside function is: $x";
?>

</body>
</html>
