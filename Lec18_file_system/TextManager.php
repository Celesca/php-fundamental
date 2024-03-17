<?php

$textFile = fopen('data.txt', 'r') or die('Unable to open file!');

// Read all file
//echo fread($textFile, filesize('data.txt'));
echo fgets($textFile); // Read a line from file (ค่อยๆ อ่านถัดไปทีละบรรทัด)
fclose($textFile);

// Write csv Files
$csvFile = fopen("info.csv", "w") or die("Unable to open file!");
$infoFile = "Name,email,phone\nJohn, johnqt@gmail.com, 123456789;";
fwrite($csvFile,$infoFile);
fclose($csvFile);

echo "<br>";

// Read csv files
$textFile = fopen('info.csv', 'r') or die('Unable to open file!');
echo fread($textFile, filesize('info.csv'));
fclose($textFile);