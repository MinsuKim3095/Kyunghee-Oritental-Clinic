<?php

$mysql_hostname = "localhost";

$mysql_user = "apple3095";

$mysql_password = "ye6428ye!";

$mysql_database = "kyunghee_db";

 

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysql_select_db($mysql_database, $bd) or die("db connect error");



?>
