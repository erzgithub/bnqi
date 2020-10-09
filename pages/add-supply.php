<?php
include '../connection/db.php';

if (isset($_POST['submit'])) {
	$sname = $_POST['sname'];
	$dr = $_POST['dr'];
	$pname = $_POST['pname'];
	$qty = $_POST['qty'];
	$tprice = $_POST['tprice'];

	foreach ($pname as $key => $value) {
		
		$query = $con->query("INSERT into products(supplier,prod_name,dr_no,quantity,delivery_price,date_delivered) 
			values('"
			.$con->escape_string($sname).
			"','"
			.$con->escape_string($value).
			"','"
			.$con->escape_string($dr).
			"','"
			.$con->escape_string($qty[$key]).
			"','"
			.$con->escape_string($tprice).
			"',now())");
		if ($query) {
			echo "<script type='text/javascript'>alert('Success');</script>";
			echo "<script type='text/javascript'>window.location='supplier.php';</script>";
		}else{
			echo "Something wrong with the query";
		}

	}

	///$query = $con->query("INSERT Into products(supplier,prod_name,dr_no,quantity,delivery_price,date_delivered) values('$sname','$pname','$dr','$qty','$tprice',now())");
	/*if ($query) {
		echo "<script type='text/javascript'>alert('Success');</script>";
		echo "<script type='text/javascript'>document.location='supplier.php';</script>";
	}*/
}
?>