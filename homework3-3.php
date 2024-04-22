<!DOCTYPE html>
<html>
    <head>
        <style>

        </style>
    </head>

    <body>
        <form action = "homework3-3.php" method = "post">
            <label for = "fibonacci"> 100이하의 정수 n 입력 : </label>
            <input type = "text" id = "fibonacci" name = "fibonacci">
            <input type = "submit" name = "제출버튼">
        </form> 

        <!-- 피보나치 재귀함수를 사용해서 해결 -->
        <?php
        $num = $_POST['fibonacci'];
        $result;
        $i;
        $div;

        function fibonacci($n) {
            if ($n <= 1) {
                return $n;
            }

            // 재귀호출
            return fibonacci($n - 1) + fibonacci($n - 2);
        }

        echo "n f(n) f(n+1) / f(n)<br>";
         
        for ($n = 1; $n <= $num; $n++)
        {
            $div = fibonacci($n + 1) / fibonacci($n);
            
            echo "$n    ";
            echo fibonacci($n);
            echo "   ";
            echo "   $div<br>";

            echo " ";
        }
        ?>

    </body>
</html>