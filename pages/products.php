<?php
include '../connection/db.php';
include 'includes/pagination.php';
//$query = $con->query("SELECT * from sample_product order by id asc");

//	$rows[] = $row;
//This is a teest
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Products</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/nav.php' ?>
<?php include 'includes/acordian.php' ?>
<?php include 'includes/acordianjs.php' ?>
<div class="col-md-9">
<div class="">
	<h2>Products Inventory</h2>
</div>
	<div>
		<div class="panel-heading">Products
		<button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#add_prod"><i class="fa fa-plus-circle"></i> Add</button>
		</div>
		<div class="panel-body">
			<div class="table table-bordered">
				<table width="100%" class="table table-striped" id="products">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product Name</th>
							<th>Description</th>
							<th>Type</th>
							<th>Quantity</th>
							<th>Action</th>							
						</tr>
					</thead>
					<tbody>
					<?php while ($row = $nquery->fetch_array()) {/*foreach ($row as $r) {*/ ?>
						<tr id="<?php echo $row['id'];?>">
							<td data-target="prodId"><?php echo $row['id']; ?></td>
							<td data-target="name" style="text-transform:capitalize;"><?php echo $row['prod_name']; ?></td>
							<td data-target="description"><?php echo $row['description']; ?></td>
							<td data-target="ptype"><?php echo $row['prod_type']; ?></td>
							<td data-target="qty"><?php echo $row['quantity']; ?></td>
							<td><button type="button"  name="edit" data-id="<?php echo $row['id']; ?>" class="btn btn-info btn-xs edit_prod" data-toggle="modal" data-target="edit_prod"><i class="fa fa-edit"></i> Edit</button> | <button type="button" name="delete" value="Delete" id="<?php echo $row['id']; ?>" class="btn btn-danger btn-xs delete_prod"><i class="fa fa-trash"></i> Delete</button></td>
						</tr>
						<?php }//} ?>
					</tbody>
				</table>
				
			</div>
			<div class="pagination_controls"><?php echo $paginationCtrls; ?></div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/products_modal.js"></script>
<?php include 'modal/products_modal.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>