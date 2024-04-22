<!DOCTYPE html>
<html>
    <head>
        <style>

        </style>
    </head>

    <body>
        <!-- 정수 n 입력받음-->
        <form action = "homework3-2.php" method = "post">
            <label for = "number"> 정수(10이상 100이하의 정수) 입력 : </label>
            <input type = "text" id = "number" name = "number">
            <input type = "submit" name = "제출버튼">
        </form>

        <!-- n개의 정수 랜덤넘버 생성하고, 생성된 결과와 올림차순으로 소탕한 결과를 출력-->
        <?php
        $num = $_POST['number'];
        $i;
        $j;
        $result = array(); // 배열로 설정
        

        for ($i = 0; $i <= $num; $i++)
        {
            $result[] = rand(1, 100); 
        }

        sort($result);

        foreach ($result as $value)
        {
            echo "$value ";
        }
        // foreach는 PHP에서 배열과 객체를 반복하는 데 사용되는 제어 구조입니다. 
        // 이 구조를 사용하면 배열의 각 요소 또는 객체의 각 속성에 대해 반복 작업을 수행할 수 있습니다.
        ?>

    </body>
</html>