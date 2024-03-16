<html>

<head>
    <title>Control Flow</title>
</head>
<body>
    <?php
    // If-else
        if (10 < 5) {
            echo "Pass 1 !";
        }
        else if (10 > 5) {
            echo "Pass 2 !";
        }
        else {
            echo "Fail !";
        }

        echo "<br>";

        // Switch-case
        $myColor = "red";
        switch($myColor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "None T_T";
                break;
        }
        echo "<br>";

        // Score Grade 0-100
        $score = 7;
        if ($score >= 80) {
            echo "A";
        }
        else if ($score >= 70) {
            echo "B";
        }
        else if ($score >= 60) {
            echo "C";
        }
        else if ($score >= 50) {
            echo "D";
        }
        else {
            echo "F";
        }

    ?>
</body>
</html>