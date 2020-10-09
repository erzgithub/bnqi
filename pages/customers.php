<?php
include '../connection/db.php';
include 'includes/cpagination.php';
/*$query = $con->query("SELECT * from job_orders");

while ($row = $query->fetch_array()) {
	$rows[] = $row;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Customers</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/acordian.php'; ?>
<?php include 'includes/acordianjs.php'; ?>


<div class="col-md-9">
	<div class="">
		<h2>Customers List</h2>
	</div>
	<div>
		<div class="panel-heading">View Customers List
		<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#add_cust"><i class="fa fa-plus-circle"></i> Add</button>
		</div>
		<div class="panel-body">
			<div class="table table-bordered">
				<table width="100%" class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address</th>
							<th>Mobile#</th>
							<th>Telephone</th>
							<th>Action</th>							
						</tr>
					</thead>
					<tbody>
					<?php while ($r = $nquery->fetch_array()) { //foreach ($rows as $r) { ?>
						<tr id="<?php echo $r['id'];?>">
							<td data-target="cust_id"><?php echo $r['id']; ?></td>
							<td data-target="cname" style="text-transform:capitalize;"><?php echo $r['cust_name']; ?></td>
							<td data-target="address" style="text-transform:capitalize;"><?php echo $r['address']; ?></td>
							<td data-target="mobile"><?php echo $r['mobile']; ?></td>
							<td data-target="tel"><?php echo $r['contact']; ?></td>
							<td><button type="button"  name="edit" data-id="<?php echo $r['id']; ?>" class="btn btn-info btn-xs edit_cust" data-toggle="modal" data-target="#edit_cust"><i class="glyphicon glyphicon-fullscreen"></i> View Details</button> | <!--<button type="button" name="delete" value="Delete" id="<?php echo $r['id']; ?>" class="btn btn-danger btn-xs delete_cust"><i class="fa fa-trash"></i> Delete</button>-->
							<a class = "btn btn-success btn-xs btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="pagination_controls"><?php echo $paginationCtrls; ?></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/customer_modal.js"></script>
<?php include 'modal/cust_modal.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>