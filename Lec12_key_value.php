<?php

    # Dictionary
    $money = array("Manote" => 15000, "Prame" => 500, "Pop" => 2500);
    echo $money["Manote"] . "<br>";
    echo $money["Prame"] . "<br>";
    echo $money["Pop"] . "<br>";

    # phpinfo();

    # Count functions
    $animals = array("Dog", "Cat" , "Bird" , "Leon");
    echo count($animals) . "<br>";

    # Random
    echo rand(1,19);

    # String Replacement
    $message = "Hello World";
    echo str_replace("World", "Prame",$message);
    echo "<br>";
    echo $message;

    echo "<h1>เซียมซีวัยรุ่น</h1>";
    # Workshop - Lucky Draw
    $randomNumber = rand(1,5);
    if ($randomNumber == 1) {
        echo "You win 1000 THB";
    } else if ($randomNumber == 2) {
        echo "You win 2000 THB";
    } else if ($randomNumber == 3) {
        echo "You win 3000 THB";
    } else if ($randomNumber == 4) {
        echo "You win 4000 THB";
    } else if ($randomNumber == 5) {
        echo "You win 5000 THB";
    } else {
        echo "You win 0 THB";
    }

?>
