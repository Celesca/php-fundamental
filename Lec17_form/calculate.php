ยินดีต้อนรับ <?php echo $_POST["name"]; ?><br>
อีเมลคุณคือ <?php echo $_POST["email"]; ?><br>
สินค้าที่คุณสั่งซื้อคือ <?php echo $_POST["product"]; ?><br>
ราคาสินค้า <?php echo $_POST["productPrice"]; ?> บาท<br>
---------------------------------<br>
ราคาสุทธิ (+VAT) <?php $total = $_POST["productPrice"]*1.07;
                    echo $total; ?> บาท<br>
ค่าขนส่ง 50 บาท
ราคารวมจัดส่ง <?php echo $total+50; ?> บาท