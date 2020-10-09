<?php
include '../connection/db.php';

if (isset($_POST['update'])) {
	$id = $_POST['edit-id'];
	$cname = $_POST['ename'];
	$addrs = $_POST['eaddress'];
	$desc = $_POST['edesc'];
	$jtype = $_POST['ejtype'];
	$qty = $_POST['eqty'];
	$mobile = $_POST['emobile'];
	$contact = $_POST['econtact'];

	$check = $con->query("SELECT * from job_orders where id ='$id'");
	$count = $check->num_rows;
	if ($count > 0) {
		$query = $con->query("UPDATE job_orders set cust_name = '$cname', address = '$addrs', description = '$desc', jo_type = '$jtype', qty = '$qty', mobile = '$mobile', contact = '$contact' where id = '$id'");
		echo "<script type='text/javascript'>alert('Job Orders Successfully Updated!')</script>";
		echo "<script type='text/javascript'>document.location='joborders.php';</script>";

	}else{
		echo "error";
	}

}
?>