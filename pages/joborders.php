<?php
include '../connection/db.php';
include 'includes/jopagination.php';
//$query = $con->query("SELECT * from job_orders inner join customers on job_orders.cust_id=customers.id inner join jo_type on job_orders.cust_id=jo_type.id;");
//$query = $con->query("SELECT * from job_orders");
/*while ($row = $query->fetch_array()) {
	$rows[] = $row;
}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Job Orders</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/acordian.php'; ?>
<?php include 'includes/acordianjs.php'; ?>

<div class="col-md-9">
	<div class="">
		<h2>Job Orders List</h2>
	</div>
	<div>
		<div class="panel-heading">View Job Orders List
		<button class="btn btn-primary btn-sm pull-right hidden" data-toggle="modal" data-target="#add_joborder"><i class="fa fa-plus-circle"></i> Add</button>
		</div>
		<div class="panel-body">
			<div class="table table-bordered">
				<table width="100%" class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Customer Name</th>
							<th>Quantity</th>
							<th>Description</th>
							<th>Product Name</th>
							<th>Type</th>
							<th>Action</th>							
						</tr>
					</thead>
					<tbody>
					<?php while ($r = $nquery->fetch_array()) { //foreach ($rows as $r) { ?>
						<tr id="<?php echo $r['id'];?>">
							<td data-target="job_id"><?php echo $r['id']; ?></td>
							<td data-target="cust_name" style="text-transform:capitalize;"><?php echo $r['cust_name']; ?></td>
							<td data-target="qty" style="text-transform:capitalize;"><?php echo $r['qty']; ?></td>
							<td data-target="description" style="text-transform:capitalize;"><?php echo $r['description']; ?></td>
							<td data-target="pname" class="" style="text-transform:capitalize;"><?php echo $r['pname']; ?></td>
							<td data-target="jtype" style="text-transform:capitalize;"><?php echo $r['jo_type']; ?></td>
							
							<td data-target="address" class="hidden" style="text-transform:capitalize;"><?php echo $r['address']; ?></td>

							<!--<td data-target="amount" class="hidden" style="text-transform:capitalize;"><?php echo $r['amount']; ?></td>-->
							<td data-target="mobile" class="hidden" style="text-transform:capitalize;"><?php echo $r['mobile']; ?></td>
							<td data-target="contact" class="hidden" style="text-transform:capitalize;"><?php echo $r['contact']; ?></td>
							<td><button type="button"  name="edit" data-id="<?php echo $r['id']; ?>" class="btn btn-info btn-xs edit_jlist" data-toggle="modal" data-target="#edit_modal"><i class="glyphicon glyphicon-fullscreen"></i> View Details</button> | <button type="button"  name="delete" id="<?php echo $r['id']; ?>" class="btn btn-warning btn-xs delete_jlist"><i class="fa fa-trash"></i> Delete</button></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="pagination_controls"><?php echo $paginationCtrls; ?></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/job_order.js"></script>
<?php include 'modal/joborders_modal.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>