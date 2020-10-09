<?php
include '../connection/db.php';
if (isset($_POST['prod_id'])) {
	$id = $_POST['prod_id'];

	$query = $con->query("DELETE from rlet_cheke where id = '$id'");

	if ($query) {
		echo "Cheque Successfully Deleted!";
		echo "";
	}else{
		echo "error";
	}
}

?>