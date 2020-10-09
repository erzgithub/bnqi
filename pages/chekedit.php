<?php
include '../connection/db.php';

if (isset($_POST['edit'])) {
	$id = $_POST['edit-id'];
	$rx = $_POST['erx'];
	$agent = $_POST['eagent'];
	$estab = $_POST['eestab'];
	$bank = $_POST['ebank'];
	$chek = $_POST['echekno'];
	$price = $_POST['eprice'];
	$col = $_POST['ecol'];

	$select = $con->query("SELECT * from cheke where chek_id = '$id'");

	$count = $select->num_rows;
	if ($count > 0) {
			$query = $con->query("UPDATE cheke Set rx = '$rx', agent = '$agent', estab = '$estab', bank='$bank', chekno= '$chek', price = '$price', col = '$col', date_ginawa = now() where chek_id = '$id'");
			echo "<script type='text/javascript'>alert('Success Updating Cheque!');</script>";
			echo "<script type='text/javascript'>document.location='cheque.php'</script>";
		}else{
			echo "<script type='text/javascript'>alert('Something went wrong updating!');</script>";
	}
}
?>