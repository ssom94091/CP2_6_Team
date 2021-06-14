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
                    <th>WAAwithADJ</th>
                    <th>출장</th>
                    <th>선발</th>
                    <th>이닝</th>
                    <th>기회</th>
                    <th>자살</th>
                    <th>보살</th>
                    <th>실책</th>
                    <th>수비율</th>
                    <th>RF9</th>
                    <th>RNG</th>
                    <th>ARM</th>
                    <th>CS</th>
                    <th>BLK</th>
                    <th>E+</th>
                    <th>RAA</th>
                    <th>/133</th>
                    <th>POSADJ</th>
                    <th>RAAwithADJ</th>
                    <th>WAAw/oADJ</th>
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
          $sql = "SELECT * FROM defender_".$_REQUEST['tmp_year'];
          $result = mysqli_query($conn, $sql);




          if (mysqli_num_rows($result) > 0) {
             while($row = mysqli_fetch_assoc($result)) {
                 echo "<tr><td>" . $row["순"]. "</td><td>" . $row["이름"]. "</td><td>" . $row["팀"]. " </td><td>" . $row["WAAwithADJ"]. "</td><td>" . $row["출장"]. 
                 "</td><td>" . $row["선발"]. "</td><td>" . $row["이닝"]. "</td><td>" . $row["기회"]. " </td><td>" . $row["자살"]. "</td><td>" . $row["보살"].
                 "</td><td>" . $row["실책"]. "</td><td>" . $row["수비율"]. "</td><td>" . $row["RF9"]. "</td><td>" . $row["RNG"]. "</td><td>" . $row["ARM"].
                 "</td><td>" . $row["CS"]. "</td><td>" . $row["BLK"]. "</td><td>+" . $row["E+"]. "</td><td>" . $row["RAA"]. "</td><td>" . $row["/133"]. "</td><td>" . $row["POSADJ"].
                 "</td><td>" . $row["RAAwithADJ"]. "</td><td>" . $row["WAAw/oADJ"]."</td></tr>";
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