<?php

$host = "127.0.0.1";
$user = "rocksbn";                           //Your Cloud 9 username
$pass = "";                                  //Remember, there is NO password by default!
$db = "oqt";                                 //Your database name you want to connect to
$port = 3306;                                //The port #. It is always 3306

$conn = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
teste
?>
