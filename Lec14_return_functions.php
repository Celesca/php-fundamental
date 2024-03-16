<?php

    // passed by reference - use & to reference in parameter
    // passed by value - just send the value not refers to the original variable
    function sayHello(&$name, $lastName = "None") {
        $name = "Mr. ". $name;
        return "Hello ". $name. " " . $lastName;
    }


    $myName = "John";
    $text = sayHello($myName, "Doe");
    echo $text;

    function add( $x, $y = 10) {
        return $x + $y;
    }

    echo "<br>";
    echo add(5);