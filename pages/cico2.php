<?php 
include '../connection/db.php';

/*$query = $con->query("SELECT * from cico");
while ($row = $query->fetch_array()) {
	$rows[] = $row;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>RODLET | CASH IN && CASH OUT</title>
	<?php include 'includes/head.php'; ?>
	<script type="text/javascript" src="../datatables/media/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="../datatables/media/js/dataTables.bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../datatables/media/css/dataTables.bootstrap.min.css">
</head>
<body>
<?php include 'includes/nav.php'; ?>
<div class="panel panel-default">
	<div class="panel-heading"><a href="cico2.php" type="button" id="ci" class="btn btn-primary hidden-print">Cash In</a>  <a href="rlet_cashout.php" type="button" id="co" class="btn btn-default hidden-print">Cash Out</a> 
	<?php
	$total = mysqli_query($con, "SELECT (select sum(amount) from rlet_cico where cashtype = 1) - (select sum(amount) from rlet_cico where cashtype = 2) AS maniga");
	$row = $total->fetch_assoc();
	echo "<div class='card pull-right' style='margin-right:70px'>
				<div class='total' style='width:200px'>
					<h3>₱".number_format($row['maniga'],2)."</h3>
				</div>
				<div class='label-down' style='width:200px'>
					<p style='text-align:left'>Total Amount Available</p>
				</div>
		  </div>";
	?>
	<?php
	$total = mysqli_query($con, "SELECT sum(amount) AS value_sum from rlet_cico where cashtype = 1");
	$row = $total->fetch_assoc();
	echo "<div class='card pull-right' style='margin-right:100px'>
				<div class='total' style='width:200px'>
					<h3>₱".number_format($row['value_sum'],2)."</h3>
				</div>
				<div class='label-down' style='width:200px'>
					<p style='text-align:left'>Total Cash In Amount</p>
				</div>
		  </div>";
	?>
	<a class = "btn btn-success btn-print hidden-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
	</div>
	<h3 style="text-align:center;color:red;">RODLET <strong>CASH IN</strong></h3>
	<div class="container">
		<button class="btn btn-info hidden-print" data-toggle="modal" data-target="#addci2"><i class="fa fa-plus-circle"></i> ADD Cash In</button>
	<div class="panel-body">
			<!--<form method="post">
				<div class="input-group col-md-4 pull-right hidden-print" style="margin:5px;">
					<input type="search" name="search" class="form-control" placeholder="Enter Month...(ex.January)">
					<div class="input-group-btn">
						<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</form>-->
			<div class="table">
				<table class="table table-striped" id="cashin">
					<thead>
						<tr>
						<th>Account</th>
						<th>Name</th>
						<th>Establisment</th>
						<th>Amount</th>
						<th>Collected by</th>
						<th>Date Collected</th>
						<th>Action</th>
					</tr>
					</thead>
					<?php
						$query = $con->query("SELECT * from rlet_cico where cashtype = 1 ");
						while ($row = $query->fetch_array()) {
						echo "<tr id=".$row['id'].">";
							echo "<td data-target='acct' style='text-transform:capitalize'>".$row['acct']."</td>";
							echo "<td data-target='name' style='text-transform:capitalize'>".$row['name']."</td>";
							echo "<td data-target='estab' style='text-transform:capitalize'>".$row['estab']."</td>";
							echo "<td data-target='amount' style='text-transform:capitalize'>".$row['amount']."</td>";
							echo "<td data-target='cby' style='text-transform:capitalize'>".$row['cby']."</td>";
							echo "<td>".date('M d, Y h:i A' ,strtotime($row['date_collected']))."</td>";
							echo "<td><button class='btn btn-xs btn-info edit hidden-print' id=".$row['id']." data-toggle='modal' data-target='#editci2'>Edit</button> <button class='btn btn-danger btn-xs delete hidden-print' id=".$row['id'].">Delete</button></td>";
							echo "</tr>";

					} ?>

				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'modal/cico2-modal.php'; ?>
<script type="text/javascript" src="js/cico2.js"></script>
</body>
</html>