<?php session_start();
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];


    if ($_POST["username"] == "admin" && $_POST["password"] == "1234") {

            echo "ยินดีต้อนรับคุณ " . $_SESSION["username"];
            echo "<form action='logout.php' method='get'> 
                <input type='submit' value='Logout'>
                </form>";
        }

    else {
        echo "ไม่มีข้อมูล เข้ามาไม่ได้นะครับ ไปหน้าล็อกอินก่อน <br>";
        echo "<a href='login.php'> กลับไปหน้าล็อกอิน </a>";
    }
