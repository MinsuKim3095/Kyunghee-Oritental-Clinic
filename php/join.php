<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    $join_patientName = $_POST['join_patientName']; //성명
    $join_patientTel = $_POST['join_patientTel']; //전화번호
    $join_addressSearch = $_POST['join_addressSearch']; //한의원 주소
    $join_juminNumber = $_POST['join_juminNumber']; //주민등록번호
    $join_recommendPatient = $_POST['join_recommendPatient']; //추천자

//query 전송
    $sql = 'insert into patient_db (join_patientName, join_patientTel, join_addressSearch, join_juminNumber, join_recommendPatient)';
    $sql = $sql."values('$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_juminNumber', '$join_recommendPatient')";
    if($connect->query($sql)){
        echo "<script>alert(\"회원가입이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"회원가입에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:/main.php');
mysqli_close($connect);
?>



