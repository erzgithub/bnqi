<?php
include '../connection/db.php';

if (isset($_POST['jo_id'])) {
	$id = $_POST['jo_id'];

	$query = $con->query("DELETE from job_orders where id = '$id'");

	if ($query) {
		echo "Job Order Successfully Delete!";
	}else{
		echo "error";
	}
}
?>