<?php
include '../connection/db.php';

if (isset($_POST['add'])) {
	$cname = $_POST['cname'];
	$add = $_POST['address'];
	$mob = $_POST['mobile'];
	$tel = $_POST['contact'];

	$cname = $con->escape_string($_POST['cname']);
	$add = $con->escape_string($_POST['address']);
	$mob = $con->escape_string($_POST['mobile']);
	$tel = $con->escape_string($_POST['contact']);

	$insert = $con->query("INSERT Into job_orders(cust_name,address,mobile,contact) values('$cname','$add','$mob','$tel')");

	if (!$insert) {
		echo 'Error';
	} else {
		echo "<script type='text/javascript'>alert('New Customer Successfully Added!');</script>";
		echo "<script type='text/javascript'>document.location='customers.php'</script>";
	}
	
}
?>