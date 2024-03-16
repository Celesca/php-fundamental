<?php

    $animals = array('Turtle', 'Cat', 'Dog');

    foreach($animals as $value) {
        // ต่อข้อความให้เสร็จก่อน ถึงจะ Echo
        echo "<a href=". $value .  "><li>" . $value . "</li></a>";
    }
?>