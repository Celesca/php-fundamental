<?php

    // While

    $x = 0;

    while($x <= 100) {
        if ($x % 10 == 0) {
            echo "Hello x " . $x . "<br>";
        }
        $x++;
    }

    // Do-while (such as login)

    $y = 0;
    do {
        $y += 5;
        if ($y % 10 == 0) {
            echo "Hello y  " . $y . "<br>";
        }

    } while($y <= 100);




?>
