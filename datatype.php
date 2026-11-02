<html>
    <body>
        <?php
        //boolean data type
        $is_notmarried=true;
        var_dump($is_notmarried);
        echo "<br>";
        
        //integer data type
        $age=20;
        var_dump($age);
        echo "<br>";

        //float data type
        $temperature = 22.5;
        var_dump($temperature);
        echo "<br>";
        
        //null data type
        $data = null;
        var_dump($data);
        echo "<br>";

        //array data type
        $fruits = array("apple", "cherry" , "strawberry");
        var_dump($fruits);
        echo "<br>";
        
        // object data type
        class bike{
            public $name;
            public $color;
            function set_details($name,$color){
                $this ->name = $name;
                $this -> color=$color;

            }
            function get_details(){
                echo "Bike Name is :".$this ->name;
                echo "Bike Color is :". $this ->color;
                echo "<br>";


            }
        }
        $KTM = new bike ();
        $KTM -> set_details("KTM 390", "ORANGE");
        $KTM -> get_details();

        $YAMAHA = new bike();
        $YAMAHA -> set_details("MT-15","BLACK");
        $YAMAHA -> get_details();

        ?>
        </body>
    </html>