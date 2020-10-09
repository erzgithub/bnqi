<?php
include '../connection/db.php';

if (isset($_POST['add'])) {
	$rx = $_POST['resibo'];
	$agent = $_POST['agent'];
	$estab = $_POST['estab'];
	$bank = $_POST['bank'];
	$chek = $_POST['chek'];
	$price = $_POST['price'];
	$col = $_POST['col'];

	$query = $con->query("INSERT into rlet_cheke(rx,agent,estab,bank,chekno,price,col,date_ginawa) values('$rx', '$agent','$estab','$bank', '$chek', '$price', '$col', now())");
	if ($query) {
		echo "<script type='text/javascript'>alert('Success Adding New Cheque!');</script>";
		echo "<script type='text/javascript'>document.location='chek2.php';</script>";
	}
}else{
	echo "my problema";
}

?>