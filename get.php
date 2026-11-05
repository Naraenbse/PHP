<?php
$username = "";
$email = "";

if(!empty($_GET))
{
$username = $_GET['username'];
}
$email ="";
if(!empty($_GET))
{
    $email = $_GET['email'];
}
?>
<form method="GET">
Username: <br>
<input type="text" name="username" autocomplete="off"/>
<?php if(empty($username)){echo "User name Required";} ?>
<br>
<input type ="text" name = "email" placeholder ="enter the email" autocomplete="off">
<?php if (empty($email) ){echo "email is required";}?>
<br><br>
<input type="submit"/>
</form>