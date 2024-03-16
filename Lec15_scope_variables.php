<?php
// Global Scope - Outside function
$appName = "MyApp";
echo $appName. "<br>";

function printHead() {
    // Local Scope - Inside function only
    $appName = "MyFile";
    echo $appName. "<br>";
}

?>