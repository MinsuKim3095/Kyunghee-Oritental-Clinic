<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>patient info</title>
    <body>
        <?php
        $host = 'localhost';
        $user = 'apple3095';
        $pw = 'ye6428ye!';
        $dbName = 'apple3095';
        $mysqli = new mysqli($host, $user, $pw, $dbName);
            $join_patientName = $_POST['join_patientName'];
            $join_patientTel = $_POST['join_patientTel'];
            $join_addressSearch = $_POST[ 'join_addressSearch'];
            $join_juminNumber = $_POST['join_juminNumber'];
            $join_recommendPatient = $_POST['join_recommendPatient'];

            $sql = 'insert into patient_db (join_patientName, join_patientTel, join_addressSearch, join_juminNumber, join_recommendPatient)';
            $sql = $sql."values('$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_juminNumber', '$join_recommendPatient')";
            if($mysqli->query($sql)){
                echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
            }else{
                echo "<script>alert(\"회원가입에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
            };
            header('location:http://apple3095.dothome.co.kr/main3.php');
        mysqli_close($mysqli);
        ?>

        <input type='button' value='메인으로 가기' onclick="location'=http://apple3095.dothome.co.kr/main2.php'">
     </body>
</html>