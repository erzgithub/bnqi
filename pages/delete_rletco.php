<?php
include '../connection/db.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$query=$con->query("DELETE from rlet_cico where id = $id");
	echo "<script type='text/javascript'>alert('Success Deleting');</script>";
	echo "<script type='text/javascript'>document.location='rlet_cashout.php';</script>";
}else {
	echo "error";
}

?>