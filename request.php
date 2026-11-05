
<?php

$username = "";
$email = "";

if (isset($_REQUEST["submit"])) {

    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];

}
?>

<form method="POST">

    <label>Name:</label>

    <input type="text" name="username" placeholder="Enter your name" autocomplete = "off">

    <?php
    if (isset($_REQUEST["submit"]) && empty($username)) {
        echo "Enter the name";
    }
    ?>

    <br><br>

    <label>Email:</label>

    <input type="text" name="email"  placeholder="Enter the email" autocomplete = "off">

    <?php
    if (isset($_REQUEST["submit"]) && empty($email)) {
        echo "Enter the email";
    }
    ?>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>
