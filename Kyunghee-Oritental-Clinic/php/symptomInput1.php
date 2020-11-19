<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName); 
<<<<<<< HEAD
    session_start();
 
    $high_blood_pressure = $_POST['high_blood_pressure']; //고혈압
    $diabetes = $_POST['diabetes']; //당뇨
    $hepatitis = $_POST['hepatitis']; //간염
    $allergy = $_POST['allergy']; //알레르기
    $surgery_history = $_POST['surgery_history']; //수술 이력
    $medication = $_POST['medication']; //복용약
    $drinking = $_POST['drinking']; //음주
    $smoking = $_POST['smoking']; //흡연
    

    $sql = "UPDATE patient_db SET 
            high_blood_pressure = '$high_blood_pressure',
            diabetes  = '$diabetes',
            hepatitis = '$hepatitis',
            allergy = '$allergy',
            surgery_history = '$surgery_history',
            medication = '$medication',
            drinking = '$drinking',
            smoking = '$smoking' 
            WHERE join_patientName = $_SESSION[join_patientName] AND join_patientTel = $_SESSION[join_patientTel]";

    //'INSERT INTO patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
    //$sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
    
    if(query($connect)->query($sql)){
        echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
    } else{
        echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:/symptom2.php');
=======
    
    $return_array = Array();
    if(isset($_POST['high_blood_pressure']) && isset($_POST['diabetes']) && isset($_POST['hepatitis']) 
    && isset($_POST['allergy']) && isset($_POST['surgery_history']) && isset($_POST['medication']) 
    && isset($_POST['drinking']) && isset($_POST['smoking'])){

        $sql = 'INSERT INTO patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
        $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
        $result = mysqli_query($connect, $sql);

        $while($row = mysqli_fetch_array($result)) {
            $row_array['high_blood_pressure'] = $row['high_blood_pressure'];
            $row_array['diabetes'] = $row['diabetes'];
            $row_array['hepatitis'] = $row['hepatitis'];
            $row_array['allergy'] = $row['allergy'];
            $row_array['surgery_history'] = $row['surgery_history'];
            $row_array['medication'] = $row['medication'];
            $row_array['drinking'] = $row['drinking'];
            $row_array['smoking'] = $row['smoking'];
            array_push($return_array, $row_array);
        }
        
        echo json_encode($return_array, JSON_UNESCAPED_UNICODE);
    }
    
>>>>>>> 13f41958bc0041e4258b9d58c47c430d6a7827d5

?>