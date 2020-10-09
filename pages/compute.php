<?php
include '../connection/db.php';
	$id = "";
	$dow = "";
	$ot = "";
	$adv = "";
	$ded = "";
if (isset($_POST['submit'])) {
	$id = $_POST['edit'];
	$dow = $_POST['dow'];
	$ot = $_POST['ot'];
	$adv = $_POST['adv'];
	$ded = $_POST['ded'];
	
	$query = $con->query("UPDATE employee set dow = '$dow', ot = '$ot', odv = '$adv', ded = '$ded' where id = '$id'");
	if ($query) {
		echo "<script type='text/javascript'>alert('success do another query!');</script>";
		echo "<script type='text/javascript'>document.location='salary.php';</script>";
	}
}else{
	echo "y";
}

?>