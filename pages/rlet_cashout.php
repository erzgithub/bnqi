<?php 
include '../connection/db.php';

$query = $con->query("SELECT * from rlet_cico");
while ($row = $query->fetch_array()) {
	$rows[] = $row;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | CASH IN && CASH OUT</title>
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
	$total = mysqli_query($con, "SELECT sum(amount) AS value_sum from rlet_cico where cashtype = 2");
	$row = $total->fetch_assoc();
	echo "<div class='card pull-right' style='margin-right:70px'>
				<div class='total' style='width:200px'>
					<h3>₱".number_format($row['value_sum'],2)."</h3>
				</div>
				<div class='label-down' style='width:200px'>
					<p style='text-align:left'>Total Cash Out Amount</p>
				</div>
		  </div>";
	?>
	<a class = "btn btn-success btn-print hidden-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
	</div>
	<h3 style="text-align:center;color:red">RODLET <strong>CASH OUT</strong></h3>
	<div class="panel-body">
	<button class="btn btn-info hidden-print" data-toggle="modal" data-target="#addco2"><i class="fa fa-plus-circle"></i> ADD Cash Out</button>
		<div class="container">
		
			<!--<form method="post">
				<div class="input-group col-md-4 pull-right hidden-print" style="margin:5px;">
					<input type="search" name="search" class="form-control" placeholder="Enter Month...(ex.January)">
					<div class="input-group-btn">
						<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</form>-->
			<div class="table">
				<table class="table table-striped" id="rlet_cashout">
					<thead>
						<tr>
						<th>Reason</th>
						<th>Name</th>
						<th>Details</th>
						<th>Amount</th>
						<th>Date Requested</th>
						<th>Action</th>
					</tr>
					</thead>
					<?php
						$query = $con->query("SELECT * from rlet_cico where cashtype = 2");
						while ($row = $query->fetch_array()) {
							echo "<tr id=".$row['id'].">";
							echo "<td data-target='rx' style='text-transform:capitalize'>".$row['reason']."</td>";
							echo "<td data-target='name' style='text-transform:capitalize'>".$row['name']."</td>";
							echo "<td data-target='details' style='text-transform:capitalize'>".$row['details']."</td>";
							echo "<td data-target='amount' style='text-transform:capitalize'>".$row['amount']."</td>";
							echo "<td>".date('M d, Y h:i A' ,strtotime($row['date_requested']))."</td>";
							echo "<td><button class='btn btn-xs btn-info edit' id=".$row['id']." data-toggle='modal' data-target='#editco2'>Edit</button> <button class='btn btn-danger btn-xs delete' id=".$row['id'].">Delete</button></td>";
							echo "</tr>";
						

					} ?>
					

				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'modal/cico2-modal.php'; ?>
<script type="text/javascript" src="js/rlet_cashout.js"></script>
</body>
</html>