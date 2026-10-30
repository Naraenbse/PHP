<html>
    <body>
        <?php
        $x="hello php global";
        Function myFunction(){
            echo "variable x inside the function is : $x";
        }
        myFunction();
        echo "<br>";
        echo "variable x outside the function is:$x";
        ?>
        </body>
        </html>
