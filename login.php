<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/insert.css">
</head>
<body>
<div id="cssload-pgloading">
	<div class="cssload-loadingwrap">
		<ul class="cssload-bokeh">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
</body>
</html>
<?php
include 'connection/db.php';
if (isset($_POST['login'])) {
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);

	$username = $con->escape_string($username);
	$password = $con->escape_string($password);
	
	$checkpass = $con->query("SELECT * from users where password = '$password' ");
	$count = $checkpass->num_rows;
	$row = $checkpass->fetch_array();

	if ($count == 1) {
		session_start();
		$session_id = $row['id'];
		$session_firstname = $row['firstname'];
		$session_lastname = $row['lastname'];

		$_SESSION['userSession'] = $session_id;
		$_SESSION['sessionName'] = $session_firstname;
		$_SESSION['sessionLname'] = $session_lastname;
		header("Location: pages/home.php");
		die();
	} else {
			echo "<script type='text/javascript'>alert('Invalid Username or Password!');
				  document.location='index.php'</script>";
		/*$msg = "<div class='panel panel-danger'>
			<span class='glyphicon glyphicon-info-sign></span>&nbsp Invalid Password!'</div>";
		echo '<meta http-equiv="refresh" content="2;url=index.php?msg=&msg">';
		//echo "Error in going to home page";*/
	}

} else {
	/*$msg = "<div class='panel panel-danger'>
				<span class='glyphicon glyphicon-info-sign></span>&nbsp Invalid Password!'
			</div>";
		header("Location : index.php?msg=$msg");
		die();*/
}
?>
