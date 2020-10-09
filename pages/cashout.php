<?php 
include '../connection/db.php';

$query = $con->query("SELECT * from cico");
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
	<div class="panel-heading"><a href="cico.php" type="button" id="ci" class="btn btn-primary hidden-print">Cash In</a> | <a href="cashout.php" type="button" id="co" class="btn btn-default hidden-print">Cash Out</a>
	<?php
	$total = mysqli_query($con, "SELECT sum(amount) AS value_sum from cico where cashtype = 2");
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
	<a class = "btn btn-success btn-print hidden-print" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
	</div>
	<h3 style="text-align:center;color:red"><strong>CASH OUT</strong></h3>
	<a class="btn btn-info hidden-print" data-toggle="modal" data-target="#addco"><i class="fa fa-plus-circle"></i> ADD Cash Out</a>
	
	<div class="panel-body">
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
				<table class="table table-striped" id="cashout">
					<thead>
						<tr>
							<th>Reason</th>
							<th>Name</th>
							<th>Details</th>
							<th>Amount</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php
							$query = $con->query("SELECT * from cico where cashtype = 2");
							
							while ($r = $query->fetch_array()) {?>
							<td><?php echo $r['reason'];?></td>
							<td><?php echo $r['name'];?></td>
							<td><?php echo $r['details']; ?></td>
							<td><?php echo $r['amount']; ?></td>
							<td><?php echo date('M d, Y h:i A' ,strtotime($r['date_requested'])) ;?></td>
							<td><a class="btn btn-xs btn-info" href="editco.php?editid=<?php echo $r['id']; ?>">Edit</a> <a class="btn btn-danger btn-xs delete" id="<?php echo $r['id']; ?>">Delete</a></td>
						</tr>
						<?php }?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'modal/cico-modal.php'; ?>
<script type="text/javascript" src="js/cashout.js"></script>
</body>
</html>