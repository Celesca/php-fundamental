<html>
    <head>
        <title>PHP Array</title>
    </head>

<body>

<?php
    $data = array("Product A", "Product B", "Product C");
    $prices = array(100, 200, 300);
//    var_dump($data);

    echo $data[0] . " ราคา " . $prices[0] . " บาท <br>";
    echo $data[1] . " ราคา " . $prices[1] . " บาท <br>";
    echo $data[2] . " ราคา " . $prices[2] . " บาท <br>";
    echo "รวมราคา : " . $prices[0] + $prices[1] + $prices[2] . " บาท <br>";

    $customerList = array(
            array("Prame Pop", 18),
            array("Prame Pame", 20),
            array("Prame Pameza", 22)
    );

    echo $customerList[0][0] . " อายุ " . $customerList[0][1] . " ปี <br>";
    echo $customerList[1][0] . " อายุ " . $customerList[1][1] . " ปี <br>";
    echo $customerList[2][0] . " อายุ " . $customerList[2][1] . " ปี <br>";

    ?>
</body>
</html>