<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "bnqi";

$con = new mysqli($host,$user,$pass,$db);
if ($con->connect_errno){
	die("ERROR : ->" . $con->connect_error);
}else{
	//echo "connected";
}
?>
