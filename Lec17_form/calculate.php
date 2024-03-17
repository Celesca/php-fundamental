<?php

session_start();

setcookie("name", $_POST["name"], time() + 3600 );
setcookie("email", $_POST["email"], time() + 3600 );
setcookie("productName", $_POST["product"], time() + 3600);
setcookie("productPrice", $_POST["productPrice"], time() + 3600);
setcookie("name", $_POST["name"], time() - 3600); // ลบคุกกี้

$_SESSION["key"] = "3138i21oaA";

?>
ยินดีต้อนรับ <?php echo $_POST["name"]; ?><br>
อีเมลคุณคือ <?php echo $_POST["email"]; ?><br>
สินค้าที่คุณสั่งซื้อคือ <?php echo $_POST["product"]; ?><br>
ราคาสินค้า <?php echo $_POST["productPrice"]; ?> บาท<br>
---------------------------------<br>
ราคาสุทธิ (+VAT) <?php $total = $_POST["productPrice"]*1.07;
                    echo $total; ?> บาท<br>
ค่าขนส่ง 50 บาท
ราคารวมจัดส่ง <?php echo $total+50; ?> บาท

<?php
session_unset();
$_SESSION["key"] = "123123" ?>
KEY ของคุณ : <?php echo $_SESSION["key"]; ?>

====================================
ข้อมูลล่าสุดที่ผู้ใช้เคยส่งมาก่อนหน้า
<?php
    if (isset($_COOKIE["purchaseOrderBy"])) {
        echo "<br>เคยมีคำสั่งซื้อก่อนหน้าของ : " . $_COOKIE["name"];
        echo "<br>อีเมล : " . $_COOKIE["email"];
        echo "<br>สินค้า : " . $_COOKIE["product"];
        echo "<br>ราคาสินค้า : " . $_COOKIE["productPrice"];
    }
    else {
        echo "ไม่มีข้อมูล";
    }
    ?>