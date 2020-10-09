<?php
include '../connection/db.php';
//include 'includes/chekpagination.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | CHEQUE</title>
	<?php include 'includes/head.php'; ?>
	
	<script type="text/javascript" src="../datatables/media/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="../datatables/media/js/dataTables.bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../datatables/media/css/dataTables.bootstrap.min.css">
</head>
<body>
<?php include 'includes/nav.php'; ?>
<div class="panel panel-danger">
	<div class="panel-heading"><center><strong>BNQI Cheque</strong></center></div>
	<div class="panel-body">
	<a class="btn btn-info btn-sm hidden-print" href="addcheckform.php"><i class="fa fa-plus-circle"></i> ADD CHEQUE</a>
	<a class = "btn btn-success btn-print hidden-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
		<!--<form method="post">
			<div class="input-group col-md-4 pull-right" style="margin:5px;">
				<input type="search" name="search" class="form-control" placeholder="Enter Month...(ex.January)">
				<div class="input-group-btn">
					<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</form>-->
		<div class="table table-fluid">
			<table class="table table-bordered" id="cheke">
				<thead>
					<tr>
						<th>Receipt#</th>
						<th>Agent</th>
						<th>Establishment</th>
						<th>Bank</th>
						<th>Cheque#</th>
						<th>Price</th>
						<th>Collector</th>
						<th>Date</th>
						<th class="hidden-print">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$nquery = $con->query("SELECT * from cheke");
				 while ($row = $nquery->fetch_array()) { ?>
					<tr id="<?php echo $row['chek_id']; ?>">
						<td data-target="rx"><?php echo $row['rx']; ?></td>
						<td data-target="agent"><?php echo $row['agent']; ?></td>
						<td data-target="estab"><?php echo $row['estab']; ?></td>
						<td data-target="bank"><?php echo $row['bank']; ?></td>
						<td data-target="chekno"><?php echo $row['chekno']; ?></td>
						<td data-target="price"><?php echo $row['price']; ?></td>
						<td data-target="col"><?php echo $row['col']; ?></td>
						<td><?php echo date('M d, Y h:i A',strtotime($row['date_ginawa'])); ?></td>
						<td class="hidden-print"><button type="button"  name="edit" data-id="<?php echo $row['chek_id']; ?>" class="btn btn-info btn-xs edit_prod" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Edit</button> | <button type="button" name="delete" value="Delete" id="<?php echo $row['chek_id']; ?>" class="btn btn-danger btn-xs delete_prod"><i class="fa fa-trash"></i> Delete</button></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="pagination_controls"><?php //echo $paginationCtrls; ?></div>
	</div>
	<?php
	$total = mysqli_query($con, "SELECT sum(price) as maniga from cheke");
	$row = $total->fetch_assoc();
	echo "<div class='card pull-left' style='margin-right:70px'>
				<div class='total' style='width:200px'>
					<h3>₱".number_format($row['maniga'],2)."</h3>
				</div>
				<div class='label-down' style='width:200px'>
					<p style='text-align:left'>Total Amount Available</p>
				</div>
		  </div>";
	?>
</div>

<?php include 'modal/cheke-modal.php'; ?>
<script type="text/javascript" src="js/cheke.js"></script>
<?php include 'includes/footer.php'; ?>
</body>
</html>