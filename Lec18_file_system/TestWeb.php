<?php

$textFile = fopen('data.txt', 'r') or die ('Unable to open file!');
echo "<center><h1>" .fgets($textFile) . "</h1>";
echo "<li>" . fgets($textFile) . "</li></center>";