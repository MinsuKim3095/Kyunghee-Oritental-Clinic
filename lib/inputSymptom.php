<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Input Symptom</title>
    <body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $pw = 'autoset';
        $dbName = 'kyunghee';
        $connect = new mysqli($host, $user, $pw, $dbName);

        $select1 = $_POST['select1'];
        $select2 = $_POST['select2'];
        $select3 = $_POST['select3'];
        $select4 = $_POST['select4'];
        $select5 = $_POST['select5'];
        $select6 = $_POST['select6'];
        $select7 = $_POST['select7'];
        $select8 = $_POST['select8'];

        $sql = 'insert into patient_db (select1, select2, select3, select4, select5, select6, select7, select8)';
        $sql = $sql."values('$select1', '$select2', '$select3', '$select4', '$select5', '$select6', '$select7', '$select8')";
        if($connect->query($sql)){
            echo "<script>alert(\"증상 입력 완료.\");</script>";
        }else{
            echo "<script>alert(\"증상 입력 실패.\");</script>";
        };
        header('location:/main4.php');
    mysqli_close($mysqli);
    ?>

        /*$query = "SELECT * FROM patient_db 
                WHERE select1 = '$select1' 
                AND select2 = '$select2'
                AND select3 = '$select3'
                AND select4 = '$select4'
                AND select5 = '$select5'
                AND select6 = '$select6'
                AND select7 = '$select7'
                AND select8 = '$select8'";

        $result = mysqli_query($connect,$query);
        $row = mysqli_fetch_array($result);

        if($select1 === $row['select1']
        && $select2 === $row['select2']
        && $select3 === $row['select3']
        && $select4 === $row['select4']
        && $select5 === $row['select5']
        && $select6 === $row['select6']
        && $select7 === $row['select7']
        && $select8 === $row['select8'])
        {
          ?>
          
          <!--<script>
          alert("증상 입력 완료.");
          location.href='/main4.php';
          </script>-->
        
        
        </*?php
        }
        else
        {
          echo"session fail";
        ?>*/
          <!--<script>
          alert("증상 입력 실패.");
          history.back()
          </script>-->
        </*?php
        }
        ?>*/
     </body>
</html>