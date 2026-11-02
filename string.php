
        <?php
        echo strlen("hello BSE TECH");
        // it will count the number of charc in this string
echo "<br>";

// it will count the number of words in this string
echo str_word_count("HELLO BSE TECH");
echo "<br>";

//it will reverse the string
echo strrev("MONKEY D LUFFY");
echo "<br>";

//it will search for a word in the string
echo strpos("HELLO BSE TECH","BSE");
echo "<br>";

//it will check whether it will start with a string or not
$text = "STUDENT OF SRM";
var_dump(str_starts_with($text, "STUDENT"));
echo "<br>";

//it will check whether it will end with a string or not
$text = "love football";
var_dump(str_ends_with($text,"football"));
echo "<br>";

//it checks whether the string contains a specfic word or not
$text="i love virat kohli";
var_dump(str_contains($text,"love"));
?>

