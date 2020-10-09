<?php
include '../connection/db.php';

if (isset($_POST['prod_id'])) {
	$id = $_POST['prod_id'];

	$query=$con->query("UPDATE employee set dow ='0',ot='0',odv='0',ded='0' where id = '$id' ");
	if ($query) {
		echo "<script type='text/javascript'>alert('Success Deleting');</script>";
	echo "<script type='text/javascript'>document.location='cico.php';</script>";
	}
}else {
	echo "error";
}

?>