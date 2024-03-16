<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<h1> ฟอร์มการสั่งซื้อ </h1>
    <!-- GET method - ไม่เป็นความลับ -->
    <form action="calculate.php" method="get">
        ชื่อ นามสกุล : <input type="text" name="name"><br>
        email : <input type="email" name="email"><br>
        ชื่อสินค้าที่ต้องการ : <input type="text" name="product"><br>
        จำนวน : <input type="number" name="productPrice"><br>
        <input type="submit">
    </form>
</html>
