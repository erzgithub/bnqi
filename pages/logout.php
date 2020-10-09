<?php
include '../connection/db.php';

session_start();
if (empty($_SESSION['userSession'])) {
	header("Location : ../index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/logout.css">
</head>
<body>
<div style="width:150px;margin:auto;height:500px;">
<?php
	$date = date("Y-m-d H:is");
	$id = $_SESSION['userSession'];
	$remarks = "Has Logged out of the System at " . $date;
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="2;url=../index.php">';
?>
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
</div>
</body>
</html>