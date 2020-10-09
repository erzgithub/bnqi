<?php
include '../connection/db.php';

if (isset($_POST['rlet-id'])) {
	$id = $_POST['rlet-id'];
    $rx = $_POST['rx'];
	$name = $_POST['rname'];
	$details = $_POST['rdetails'];
	$amt = $_POST['ramt'];
	
	//echo $id;
    $query = $con->query("UPDATE rlet_cico Set reason = '$rx', name = '$name', details = '$details', amount = '$amt' where id = '$id'");
    echo "<script type='text/javascript'>alert('Success Updating!');</script>";
    echo "<script type='text/javascript'>document.location='rlet_cashout.php';</script>";
}

?>