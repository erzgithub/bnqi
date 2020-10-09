<?php
include '../connection/db.php';

if (isset($_POST['add'])) {
	$act = $_POST['act'];
	$name = $_POST['name'];
	$estab = $_POST['estab'];
	$amt = $_POST['amt'];
	$cby = $_POST['cby'];
	$ctype = 1;
	$query = $con->query("INSERT into rlet_cico(acct, name, estab, amount, cby,cashtype, date_collected) values('$act','$name','$estab','$amt','$cby','$ctype',now())");
	if ($query) {
		echo "<script type='text/javascript'>alert('Cash In Successfully Added!');</script>";
		echo "<script type='text/javascript'>document.location='cico2.php';</script>";
	}else{
		echo "Wrong Query";
	}
}

?>