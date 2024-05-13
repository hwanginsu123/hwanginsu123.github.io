<html>
<head>
    <meta charset="utf-8">
    <title>Parkprice</title>
    <style>
        .input-wrap {
            width: 960px;
            margin: 0 auto;
        }
        h1 { text-align: center; }
        th, td { text-align: center; }
        table {
            border: 1px solid #000;
            margin: 0 auto;
        }
        td, th {
            border: 1px solid #ccc;
        }
        a { text-decoration: none; }

        

    </style>
</head>
<body>
    <div class="input-wrap">
        <form action="price.php" method="POST">
            <p text-align : left;>
                고객성명 :  <input type = "text" name = "name" placeholder = "이름을 입력하세요">
            </p>

            <table>
                <thead>
                    <tr>
                        <th> NO </th>
                        <th width = 150px> 구분 </th>
                        <th colspan = "2" width = 150px> 어린이 </th>
                        <th colspan = "2" width = 150px> 어른 </th>
                        <th width = 150px> 비고 </th>
                    </tr>
                </thead>
                <tbody>

                    <!-- ChildEnterence-->
                    <tr>
                        <td> 1 </td>
                        <td> 입장권 </td>
                        <td> 7,000</td>
                        <td> 
                            <select name="ChildEnterence">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>
                        </td>

                        <!-- AdultEnterence -->
                        <td> 10,000</td>
                        <td> 
                            <select name="AdultEnterence">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>    
                        </td>
                        <td> 입장</td>
                    </tr>

                    <!-- ChildBIG3 -->
                    <tr>
                        <td> 2 </td>
                        <td> BIG3 </td>
                        <td> 12,000</td>
                        <td> 
                            <select name="ChildBIG3">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>      
                        </td>

                        <!-- AdultBIG3 -->
                        <td> 16,000</td>
                        <td>
                            <select name="AdultBIG3">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>  
                        </td>
                        <td> 입장+놀이3종</td>
                    </tr>

                    <!-- ChildFreeTicket -->
                    <tr>
                        <td> 3 </td>
                        <td> 자유이용권 </td>
                        <td> 21,000</td>
                        <td>
                            <select name="ChildFreeTicket">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>  
                        </td>

                        <!-- AdultFreeTicket -->
                        <td> 26,000</td>
                        <td>
                            <select name="AdultFreeTicket">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>  
                        </td>
                        <td> 입장+놀이자유</td>
                    </tr>

                    <!-- ChildYearTicket -->
                    <tr>
                        <td> 4 </td>
                        <td> 연간이용권 </td>
                        <td> 7,0000 </td>
                        <td>
                            <select name="ChildYearTicket">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>  
                        </td>

                        <!-- AdultYearTicket --> 
                        <td> 90,000 </td>
                        <td>
                            <select name="AdultYearTicket">
                                <option value="0" selected> 0 </option>
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                            </select>  
                        </td>
                        <td> 입장+놀이자유</td>
                    </tr>
                </tbody>
            </table>

            <p text-align : right;>
                <input type = "submit" name = "submit" value = "합계">
            </p>
       </form>

      
    
       <?php echo "<br>";?>

       <?php
        // 데이터베이스 연결
        $conn = mysqli_connect("localhost", "root", "", "price");

        // 폼이 제출되었는지 확인
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 폼으로부터 받은 데이터 가져오기
        $name = $_POST['name'];
        $ChildEnterence = intval($_POST['ChildEnterence']); // 문자열을 정수로 변환
        $AdultEnterence = intval($_POST['AdultEnterence']); // 문자열을 정수로 변환
        $ChildBIG3 = intval($_POST['ChildBIG3']); // 문자열을 정수로 변환
        $AdultBIG3 = intval($_POST['AdultBIG3']); // 문자열을 정수로 변환
        $ChildFreeTicket = intval($_POST['ChildFreeTicket']); // 문자열을 정수로 변환
        $AdultFreeTicket = intval($_POST['AdultFreeTicket']); // 문자열을 정수로 변환
        $ChildYearTicket = intval($_POST['ChildYearTicket']); // 문자열을 정수로 변환
        $AdultYearTicket = intval($_POST['AdultYearTicket']); // 문자열을 정수로 변환

        // 데이터 삽입 쿼리 실행
        $sql = "INSERT INTO parkprice (name, ChildEnterence, AdultEnterence, ChildBIG3, AdultBIG3, ChildFreeTicket, AdultFreeTicket, ChildYearTicket, AdultYearTicket) 
        VALUES ('$name', '$ChildEnterence', '$AdultEnterence', '$ChildBIG3', '$AdultBIG3', '$ChildFreeTicket', '$AdultFreeTicket', '$ChildYearTicket', '$AdultYearTicket')";
        $result = mysqli_query($conn, $sql);

        // 삽입 성공/실패 여부 확인
        if ($result) {
            echo "데이터가 성공적으로 저장되었습니다.";
        } 
        else {
            echo "데이터를 저장하는 동안 오류가 발생했습니다: " . mysqli_error($conn);
        }
        }
        
        // 이용권 가격 합계
        $sum = 0;
        
        // 시간, 이름 출력
        echo "<br><br><br>";
        
        echo date("Y년 m월 d일 H:i:s분");

        echo "<br> $name 고객님 감사합니다.<br>";
        
        // 조건문으로 입장권 출력
        if ($ChildEnterence > 0) {
            echo "어린이 입장권 $ChildEnterence 매<br>";
            $sum += 7000 * $ChildEnterence;
        }

        if ($AdultEnterence > 0) {
            echo "어른 입장권 $AdultEnterence 매<br>";
            $sum += 10000 * $AdultEnterence;
        }

        if ($ChildBIG3 > 0) {
            echo "어린이 BIG3 $ChildBIG3 매<br>";
            $sum += 12000 * $ChildBIG3;
        }

        if ($AdultBIG3 > 0) {
            echo "어른 BIG3 $AdultBIG3 매<br>";
            $sum += 18000 * $AdultBIG3;
        }

        if ($ChildFreeTicket > 0) {
            echo "어린이 자유이용권 $ChildFreeTicket 매<br>";
            $sum += 21000 * $ChildFreeTicket;
        }

        if ($AdultFreeTicket > 0) {
            echo "어른 자유이용권 $AdultFreeTicket 매<br>";
            $sum += 26000 * $AdultFreeTicket;
        }

        if ($ChildYearTicket > 0) {
            echo "어린이 연간이용권 $ChildYearTicket 매<br>";
            $sum += 70000 * $ChildYearTicket;
        }

        if ($AdultYearTicket > 0) {
            echo "어른 연간이용권 $AdultYearTicket 매<br>";
            $sum += 90000 * $AdultYearTicket;
        }

        echo "합계는 $sum 원입니다.";

        ?>
        

    </div>
</body>
</html>