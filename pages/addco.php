<?php 
include '../connection/db.php';

if (isset($_POST['add'])) {
	$reason = $_POST['reason'];
	$name = $_POST['name'];
	$det = $_POST['details'];
	$amt = $_POST['amt'];
	$ctype = 2;
	$query = $con->query("INSERT into cico(reason, name, details, amount,cashtype, date_requested) values('$reason','$name','$det','$amt','$ctype',now())");
	if ($query) {
		echo "<script type='text/javascript'>alert('Cash OUT Successfully Added!');</script>";
		echo "<script type='text/javascript'>document.location='cashout.php';</script>";
	}else{
		echo "Wrong Query";
	}
}

?>