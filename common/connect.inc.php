<?php
$sql_host='localhost';
$sql_username='root';
$sql_password='Pani@2829';
$sql_db='mess';
@date_default_timezone_set("Asia/Kolkata");

$db = new mysqli($sql_host,$sql_username,$sql_password,$sql_db) or die("Unable to connect to database") ;

#if(@!mysqli_connect($sql_host,$sql_username,$sql_password) || @!mysqli_select_db($sql_db)) {
#	die(mysqli_error());
#}


?>
