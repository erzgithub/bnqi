<?php
include '../connection/db.php';

if (isset($_POST['id'])) {

	$id = $_POST['id'];

	$query = $con->query("DELETE from job_orders where id = '$id'");
	if ($query) {
		echo "Customer Successfully Deleted!";
	}else{
		echo "ERROR";
	}
}

?>