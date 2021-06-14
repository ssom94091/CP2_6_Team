<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <div class="card-test">
         <form action="add-player.php" method="post">  <!-- 등록된 선수 보기-->.
             <input style=" position: right: auto;" type="submit"  value="돌아가기">
            </form>
        <table  border="1" id="dataTable"  width="100%" cellspacing="0" >
            <thead>
                <tr>
                    <th>팀</th>
                    <th>성명</th>
                    <th>포지션</th>
                    <th>등번호</th>
                    <th>생년월일</th>
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
                  $conn = mysqli_connect("13.125.93.72", "test", "test", "kbo_data"); // MYSQL에 접속
                  $sql = "SELECT * FROM Players";
                  $result = mysqli_query($conn, $sql);




                  if (mysqli_num_rows($result) > 0) {
                   while($row = mysqli_fetch_assoc($result)) {
                       echo "<tr><td>" . $row["팀"]. "</td><td>" . $row["성명"]. "</td><td>" . $row["포지션"]. " </td><td>" . $row["등번호"]. "</td><td>" . $row["생년월일"]. 
                       "</td></tr>";
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