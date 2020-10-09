<?php 
include '../connection/db.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$query = $con->query("DELETE from employee where id = '$id'");
	//echo "<script type='text/javascript'>alert('Employee Successfully Deleted!');</script>";
	//echo "<script type='text/javascript'>document.location='employee.php';</script>";
}else{
	echo "id is no set";
}

?>