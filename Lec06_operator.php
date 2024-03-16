<html>
<head>
    <title>Operators</title>
</head>
<body>
    <?php

    # Workshop #
    $productName1 = "Coke";
    $productName2 = "Pepsi";
    $productPrice1 = 20;
    $productPrice2 = 15;

    echo "<h1>ใบเสร็จรับเงิน</h1>";
    echo "----- <br>";
    echo $productName1 . ":" . $productPrice1 . " บาท <br>";
    echo $productName2 . ":" . $productPrice2 . " บาท <br>";
    echo "รวมทั้งหมด" . $productPrice1 + $productPrice2 . " บาท <br>";

    $x = 10;
    $y = 20;
    $z = $x + $y;
    echo $z + 10;
    echo "<br>";
    echo $z - 10;
    echo "<br>";
    echo $z * 2;
    echo "<br>";
    echo $z / 2;
    echo "<br>";
    echo $z**2;


    $z += 10;
    echo "<br>".$z;

    # Comparison Operators
    echo "<br>";
    echo 10 != 11;

    # Increment/Decrement Operators
    $z++;
    echo "<br>".$z;
    $z--;
    echo "<br>".$z;

    # String Operator
    $firstname = "Prame";
    $lastname = "Prasert";
    $final = $firstname . $lastname;
    $final .= "<br> Hello Krub";
    echo "<br>".$final;

    ?>
</html>