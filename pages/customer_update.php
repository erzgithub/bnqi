<?php
include '../connection/db.php';

if (isset($_POST['update'])) {
	$id = $_POST['edit-id'];
	$cname = $_POST['ecname'];
	$address = $_POST['eaddress'];
	$mobile = $_POST['emobile'];
	$contact = $_POST['etel'];


	$update = $con->query("UPDATE job_orders set cust_name = '$cname', address = '$address', mobile = '$mobile', contact = '$contact' where id = '$id'");
	if ($update) {
		echo "<script type='text/javascript'>alert('Customer Successfully Updated!');</script>";
		echo "<script type='text/javascript'>document.location='customers.php'</script>";

	}else {
		echo "<script type='text/javascript'>alert('Something went wrong updating!');</script>";
	}
}else{
	echo "Something is Wrong with the data from ajax!";
}


?>