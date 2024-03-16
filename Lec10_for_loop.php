<h1>Item List</h1>


<?php

    for ($x = 0 ; $x <= 10 ; $x++) {
        echo "<li style='color:green'>Hello" . $x . "</li><br>";
    }

    for ($x = 0 ; $x <= 100; $x += 10) {
        echo "<li>Hello" . $x . "</li><br>";
    }
?>
