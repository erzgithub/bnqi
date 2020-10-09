<?php
include '../connection/db.php';

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$position = $_POST['position'];
	$rate = $_POST['rate'];

	$query = $con->query("SELECT * from employee where id = $id");
	$count = $query->num_rows; 
	if ($count > 0) {
		$update = $con->query("UPDATE employee set name = '$name', address='$address', contact='$contact', age='$age', gender='$gender', position='$position', rate = '$rate' where id = $id");
		echo "<script type='text/javascript'>alert('Success Updating Employee!');</script>";
		echo "<script type='text/javascript'>document.location='employee.php'</script>";
	}else{
		echo "false";
	}
}

?>