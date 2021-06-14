<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <div class="card-test">

        <p>
            데이터 연도 선택

            <form action="" method="POST" name="test">
                <input type="hidden" name="tmp_year" value="{defender_data_year}" />
                <select  id="defender_data_year" onChange="change_val(this)">
                    <option value="2017" <?php if($_REQUEST['tmp_year'] == "2017") echo "SELECTED";?>>2017년</option>
                    <option value="2018" <?php if($_REQUEST['tmp_year'] == "2018") echo "SELECTED";?>>2018년</option>
                    <option value="2019" <?php if($_REQUEST['tmp_year'] == "2019") echo "SELECTED";?>>2019년</option>
                    <option value="2020" <?php if($_REQUEST['tmp_year'] == "2020") echo "SELECTED";?>>2020년</option>
                </select>
            </form>
        </p>
        <table  border="1" id="dataTable"  width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th>순</th>
                    <th>이름</th>
                    <th>팀</th>
                    <th>WAR</th>
                    <th>g</th>
                    <th>타석</th>
                    <th>타수</th>
                    <th>득점</th>
                    <th>안타</th>
                    <th>2타</th>
                    <th>3타</th>
                    <th>홈런</th>
                    <th>루타</th>
                    <th>타점</th>
                    <th>도루</th>
                    <th>도실</th>
                    <th>볼넷</th>
                    <th>사구</th>
                    <th>고4</th>
                    <th>삼진</th>
                    <th>병살</th>
                    <th>희타</th>
                    <th>타율</th>
                    <th>출루</th>
                    <th>장타</th>
                    <th>ops</th>
                    <th>woba</th>
                    <th>wrc+</th>
                    <th>wpa</th>


                </tr>
            </thead>
            <tbody>
                <script type="text/javascript">
                    function change_val(obj){
                        document.test.tmp_year.value = obj.value;
                        document.test.submit();
                    }
                </script>

                <?php
                //$year = $_REQUEST['tmp_year'];  안됨..

                echo "<p> ".$_REQUEST['tmp_year']."</p>";
               // echo "<p> $year </p>";
          $conn = mysqli_connect("13.125.93.72", "test", "test", "kbo_data"); // MYSQL에 접속
          $sql = "SELECT * FROM team_".$_REQUEST['tmp_year'];
          $result = mysqli_query($conn, $sql);




          if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                 echo "<tr><td>" . $row["순"]. "</td><td>" . $row["이름"]. "</td><td>" . $row["팀"]. " </td><td>" . $row["war"]. "</td><td>" . $row["g"]. 
                 "</td><td>" . $row["타석"]. "</td><td>" . $row["타수"]. "</td><td>" . $row["득점"]. "</td><td>" .$row["안타"]. "</td><td>" . $row["2타"]. 
                 "</td><td>" . $row["3타"]. "</td><td>" . $row["홈런"]. "</td><td>" . $row["루타"]. "</td><td>". $row["타점"]. "</td><td>" . $row["도루"]."</td><td>" . $row["도실"]."</td><td>" . $row["볼넷"]."</td><td>" . $row["사구"]."</td><td>" . $row["고4"]."</td><td>" . $row["삼진"]."</td><td>" . $row["병살"]."</td><td>" . $row["희타"]."</td><td>" . $row["희비"]."</td><td>" . $row["타율"]."</td<td>" . $row["출루"]."</td><td>" . $row["장타"]."</td><td>" . $row["ops"]."</td><td>" . $row["woba"]."</td><td>" . $row["wrc+"]."</td><td>" . $row["wpa"]."</td></tr>";
             }
         }else{
             echo "테이블에 데이터가 없습니다.";
         }

         mysqli_close($conn); // 디비 접속 닫기
         ?>
     </tbody>
 </table>
</div>
</body>
</html>