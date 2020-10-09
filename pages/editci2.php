<?php
include '../connection/db.php';

if (isset($_POST['edit-id'])) {
	$id = $_POST['edit-id'];
    $act = $_POST['eact'];
	$name = $_POST['ename'];
	$estab = $_POST['eestab'];
	$amt = $_POST['eamt'];
	$cby = $_POST['ecby'];

    $query = $con->query("UPDATE rlet_cico Set acct = '$act', name = '$name', estab = '$estab', amount = '$amt', cby = '$cby' where id = '$id'");
    echo "<script type='text/javascript'>alert('Success Updating!');</script>";
    echo "<script type='text/javascript'>document.location='cico2.php';</script>";
}

?>