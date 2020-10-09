<?php
include 'connection/db.php';

if (isset($_POST['register'])) {
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$fname = $con->escape_string($fname);
	$lname = $con->escape_string($lname);
	$username = $con->escape_string($username);
	$password = $con->escape_string($password);

	$check_pass = $con->query("SELECT username from users where username = '$username'");
	$count = $check_pass->num_rows;

	if ($count == 0) {
		$insert = "INSERT into users(firstname, lastname, username, password) values('$fname','$lname','$username','$password')";

		if ($con->query($insert)) {
			echo "<script type='text/javascript'>alert('Registration Successful! Back to sign in page to login.Thank you!');
				document.location='register.php'</script>";
		}
	} else {
		echo "<script type='text/javascript'>alert('Invalid Username! Choose another Name for your Username!');
			document.location='register.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration | BNQI</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
<div class="panel panel-default">
	<div class="panel-default" style="margin:15px 95px 5px 45px;"><h3>Please fill out the fields below to register!<a href="index.php" class="pull-right" style="text-decoration:none;">Back to Sign In page!</a></h3></div>
</div>

<div class="container">
	<div class="header">Registration</div>
	
	<form class="form-sign-in" method="post">
		<div class="form-group has-feedback col-lg-12">
			<input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required/>
		</div>
		<div class="form-group has-feedback col-md-12">
			<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required/>
		</div>
		<div class="form-group col-md-12">
			<input type="text" class="form-control" name="username" placeholder="Enter Username" required/>
		</div>
		<div class="form-group col-md-12">
			<input type="password" class="form-control" name="password" placeholder="Enter Password" required/>
		</div>
		<div class="col-md-12">
			<button class="btn btn-primary pull-left" name="register">Register</button>
			<button class="btn btn-default pull-right" type="reset" name="reset">Clear</button>
		</div>
	</form>
</div>

</body>
</html>