<?php
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName); 

    $high_blood_pressure = $_POST['high_blood_pressure']; //성명
    $diabetes = $_POST['diabetes']; //전화번호
    $hepatitis = $_POST['hepatitis']; //한의원 주소
    $allergy = $_POST['allergy']; //주민등록번호
    $surgery_history = $_POST['surgery_history']; //추천자
    $medication = $_POST['medication'];
    $drinking = $_POST['drinking'];
    $smoking = $_POST['smoking'];
    
    $sql = 'insert into patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
    $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
    if($connect->query($sql)){
        echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:/sympton2.php');
mysqli_close($connect);
?>
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   /* $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);
    
    $high_blood_pressure =  mysqli_real_escape_string($_POST['high_blood_pressure']);
    $diabetes = mysqli_real_escape_string($_POST['diabetes']);
    $hepatitis =  mysqli_real_escape_string($_POST['hepatitis']);
    $allergy =  mysqli_real_escape_string($_POST['allergy']);
    $surgery_history =  mysqli_real_escape_string($_POST['surgery_history']);
    $medication =  mysqli_real_escape_string($_POST['medication']);
    $drinking =  mysqli_real_escape_string($_POST['drinking']);
    $smoking =  mysqli_real_escape_string($_POST['smoking']);

    $sql = 'insert into patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
    $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
    if($connect->query($sql)){
        echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
    }else{
        echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
    };
    header('location:/sympton2.php');
mysqli_close($connect);
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?
    /*if(isset($_POST['submit'])){
        $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);
        if(isset($_POST['btns'])){
            $t1=implode(',',$_POST['btns']);
            $s = "INSERT INTO patient_db(high_blood_pressure) VALUES ('$t1')";
            $res = mysqli_query($s);
            if($res){
                echo "증상 입력 성공";
            }else{
                echo "증상 입력 실패";
            }
        }
    }
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?/*if(isset($_POST['submit']))
    {
    $host = 'localhost';
    $user = 'root';
    $pw = 'autoset';
    $dbName = 'kyunghee';
    $connect = new mysqli($host, $user, $pw, $dbName);

    $checkbox1 = $_POST['btns'];
    $chk="";
    foreach($checkbox1 as $chk1)
    {
        $chk .=$chk1.",";
    }
    $in_ch=mysqli_query($connect, "INSERT INTO patient_db(name) VALUES ('$chk')");
    if($in_ch==1)
        {
            echo'<script>alert("증상 입력 완료")</script>';
        }
    else
        {
            echo'<script>alert("증상 입력 실패")</script>';
        }
    }
    ?>





<?
        /*$btn1 = $_POST['btns'];
        if ($_POST["submit"]=="submit")
        {
        for ($i=0; $i<sizeof ($btn1);$i++){
        $query = "INSERT INTO patient_db (name) VALUES ('".$checkbox1[$i]. "')";
        mysql_query($query) or die(mysql_error());
        }
        echo "증상입력이 완료됐습니다.";
        }
        else
        {
        echo "증상입력 실패. 관리자에게 문의해주세요.";
        }
        ?>








        <?$high_blood_pressure =  mysqli_real_escape_string($_POST['high_blood_pressure']);
        $diabetes = mysqli_real_escape_string($_POST['diabetes']);
        $hepatitis =  mysqli_real_escape_string($_POST['hepatitis']);
        $allergy =  mysqli_real_escape_string($_POST['allergy']);
        $surgery_history =  mysqli_real_escape_string($_POST['surgery_history']);
        $medication =  mysqli_real_escape_string($_POST['medication']);
        $drinking =  mysqli_real_escape_string($_POST['drinking']);
        $smoking =  mysqli_real_escape_string($_POST['smoking']);

        $sql = 'insert into patient_db (high_blood_pressure, diabetes, hepatitis, allergy, surgery_history, medication, drinking, smoking)';
        $sql = $sql."values('$high_blood_pressure', '$diabetes', '$hepatitis', '$allergy', '$surgery_history', '$medication', '$drinking', '$smoking')";
        if($connect->query($sql)){
            echo "<script>alert(\"증상입력이 완료되었습니다.\");</script>";
        }else{
            echo "<script>alert(\"증상입력에 실패했습니다. 관리자에게 문의하십시오.\");</script>";
        };
        header('location:/sympton2.php');
    mysqli_close($connect);*/
    ?>