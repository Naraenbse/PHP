<html>
    <body>
        <?php
        //used to extract a portion of a string
        $x="visca barca";
         echo substr($x ,0,5);
          echo "<br>";

          //Slice String to the End
          $x= "visca barca!";
          echo substr($x,5);
            echo "<br>";

            //Slice String with Negative Start removes last 4 characters
            $x="visca barca!";
            echo substr($x,0,-6);
            echo "<br>";
?>
</body>
</html>