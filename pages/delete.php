<?php
include '../connection/db.php';

if (isset($_POST['id'])) {
	$id = $_POST['id'];

	$query=$con->query("DELETE from cico where id = $id");
	echo "<script type='text/javascript'>alert('Success Deleting');</script>";
	echo "<script type='text/javascript'>document.location='cico.php';</script>";
}else {
	echo "error";
}

?>