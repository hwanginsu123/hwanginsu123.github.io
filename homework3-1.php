<!DOCTYPE html>
<html>
    <head>
        <style>

        </style>
    </head>

    <body>
        <!-- 정수 n을 입력 받습니다. -->
        <form action = "homework3-1.php" method = "post">
            <label for = "number"> 정수 n을 입력하세요 : </label>
            <input type = "text" id = "number" name = "number">
            <input type = "submit" name = "제출버튼">
        </form>

        <?php
        $i;
        $sum = 0;
        $j;
        $prod = 1;
        $num = $_POST['number'];

        for ($i = 1; $i <= $num; $i++)
        {
            echo "$i ";
            $sum += $i;
            
            if ($i == $num) {
                echo "= $sum<br>";
            }

            else {
                echo "+ ";
            }
        }

        for ($j = 1; $j <= $num; $j++)
        {
            echo "$j ";
            $prod *= $j;

            if ($j == $num) {
                echo "= $prod";
            }

            else {
                echo "* ";
            }
        }
        ?>

    </body>
</html>