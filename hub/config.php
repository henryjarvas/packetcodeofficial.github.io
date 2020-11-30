<?php 
$host= "localhost";
$user= "root";
$pass= "";
$db = "test";

$dbcon = new mysqli($host,$user,$pass,$db);




if (!$dbcon) {
	die("Server Error").mysqli_connect_errono();

}





 ?>