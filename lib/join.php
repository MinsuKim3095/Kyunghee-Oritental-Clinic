<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>patient info</title>
    <body>
        <?php
            $join_patientName = $_POST[ 'join_patientName' ];
            $join_patientTel = $_POST[ 'join_patientTel' ];
            $join_addressSearch = $_POST[ 'join_addressSearch' ];
            $join_juminNumber = $_POST[ 'join_juminNumber' ];
            $join_recommendPatient = $_POST[ 'join_recommendPatient' ];
            if ( is_null( $join_patientName) ) {
                echo '<h1>Fail!</h1>';
            } else {
                $db_con = mysqli_connect( 'localhost', 'root', 'ye6428ye!@', 'kyunghee_db' );
                $db_sql = "INSERT INTO kyunghee_db ( join_patientName, join_patientTel, join_addressSearch, join_juminNumber, join_recommendPatient ) VALUES ( '$join_patientName', '$join_patientTel', '$join_addressSearch', '$join_juminNumber', '$join_recommendPatient');";
                mysqli_query( $db_con, $db_sql );
                echo '<h1>Success!</h1>';
            }
        ?>
     </body>
</html>