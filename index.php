<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI Enterprises | Development</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/adminLTE.min.css">
</head>
<body>
<div class="panel panel-danger">
	<div class="panel-heading" style="background-color: #5a2d3a"><h4>Welcome to BNQI</h4></div>
</div>
<div class="login-box">
	<div class="login-logo">
		<b>BNQI Login Form...</b>
	</div>
	<div class="login-box-body">
		<p class="login-box-message">Sign In...<a href="register.php" class="pull-right">Register</a></p>

		<form action="login.php" method="post">
		
			<div class="form-group has-feedback">
				<span class="glyphicon glyphicon-user form-control-feedback"></span><input type="text" name="username" class="form-control" placeholder="Username" required>
			</div>
			<div class="form-group has-feedback">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span><input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>
			<div class="row">
				<div class="col-xs-6 pull-right">
					<button class="btn btn-block btn-default" type="reset">Clear</button>
				</div>
				<div class="col-xs-6 pull-left">
					<button class="btn btn-block btn-primary" type="submit" name="login">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
<script src="pages/js/date_time.js"></script>           
<footer class="navbar navbar-default navbar-fixed-bottom" style="text-align:center">
    <div class="container">
    	<p class="navbar-text">
    		<strong>Copyright &copy; 2018 <a href="">BNQI Sales and Inventory Management System</a>.</strong> All rights reserved.
    	</p>
    	<b><span id="date_time" class="pull-right" style="margin-top:20px;"></span></b>
	    <script type="text/javascript">window.onload = date_time('date_time');</script>
    </div>  
</footer>
	<script src="js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="js/demo.js"></script>
</body>
</html>