<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<h1> ฟอร์มการสั่งซื้อ </h1>
    <!-- GET method - ไม่เป็นความลับ แสดงบน URL -->
    <!-- POST method - ความลับ ไม่แสดงบนท้าย URL -->
    <form action="calculate.php" method="post">
        ชื่อ นามสกุล : <input type="text" name="name"><br>
        email : <input type="email" name="email"><br>
        ชื่อสินค้าที่ต้องการ : <input type="text" name="product"><br>
        จำนวน : <input type="number" name="productPrice"><br>
        <input type="submit">
    </form>
</html>
