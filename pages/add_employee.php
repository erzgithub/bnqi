<?php
include '../connection/db.php';

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$position = $_POST['position'];
	$rate = $_POST['rate'];

	$query = $con->query("INSERT Into employee(name,address,contact,age,gender,position,rate,date_created,dow,ot,Odv,ded) values('$name', '$address','$contact','$age','$gender','$position','$rate',now(),0,0,0,0)");
	if ($query) {
		echo "<script type='text/javascript'>alert('Success Adding New Employee!')</script>";
		echo "<script type='text/javascript'>document.location='employee.php'</script>";
	}else{
		echo "Wrong query again!";
	}
}

?>