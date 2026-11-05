
<?php

$username = "";
$email = "";

if (isset($_POST["submit"])) {

    $username = $_POST["name"];
    $email = $_POST["email"];

}

?>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter your name">
    
    <?php
    if (isset($_POST["submit"]) && empty($username)) {
        echo "Enter the name";
    }
    ?>

    <br><br>

    <label>Email:</label>

    <input type="text" name="email"
           placeholder="Enter the email">

    <?php
    if (isset($_POST["submit"]) && empty($email)) {
        echo "Enter the email";
    }
    ?>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>
