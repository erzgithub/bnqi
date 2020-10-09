<?php
include '../connection/db.php';

if (isset($_POST['add'])) {
	$name = $_POST['name'];
	$desc = $_POST['description'];
	$ptype = $_POST['ptype'];
	$qty = $_POST['qty'];

	$name = $con->escape_string($_POST['name']);
	$desc = $con->escape_string($_POST['description']);
	$ptype = $con->escape_string($_POST['ptype']);
	$qty = $con->escape_string($_POST['qty']);

	$insert = $con->query("INSERT Into products (prod_name,description,prod_type,quantity) values('$name','$desc','$ptype','$qty')");
	if ($insert) {
		echo "<script type='text/javascript'>alert('Successfully Added new Product!');</script>";
		echo "<script type='text/javascript'>document.location='products.php'</script>";
		
	} else {
		echo "<script type='text/javascript'>alert('Error');</script>";
		//echo "<script type='text/javascript'>document.location='products.php'</script>";
		
	}
}
?>
