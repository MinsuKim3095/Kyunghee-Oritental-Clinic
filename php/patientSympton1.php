<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    $high_blood_pressure = $_POST['high_blood_pressure']; //환자 증상1 
    $diabetes = $_POST['diabetes'];
    $hepatitis = $_POST['hepatitis'];
    $allergy = $_POST['allergy'];
    $surgery_history = $_POST['surgery_history'];
    $medication = $_POST['medication'];
    $drinking = $_POST['drinking'];
    $smoking = $_POST['smoking'];

//query 전송
    $sql = 'INSERT INTO patient_sympton (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
    $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
    
    if($connect->query($sql)){
        echo "<script>alert(\"증상 입력이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"증상 입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };

    // header('location:/sympton1.php');
    
    mysqli_close($mysqli);
    
?>