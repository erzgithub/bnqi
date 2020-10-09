<?php
include '../connection/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Sales</title>
	<?php include 'includes/head.php'; ?>
	<?php include 'includes/nav.php'; ?>
</head>
<style type="text/css">
	th{
		text-align: center;
	}
</style>
<body>
<div class="col-md-12" style="margin-bottom:10px;">
	<button class="pull-left btn btn-success show_new">Click Here for New Customer!</button>
</div>
<hr>
<div class="panel panel-danger col-md-9">
	<div class="panel-heading"></div>
	<div class="panel-body">
		<form action="add_jo.php" method="post" id="tab">
	<div class="form-group col-md-12">
		<div class="old_cust">
				<label>Select Customer Name:</label>
					<select class="form-control" name="cname">
						<option></option>
							<?php $customer = $con->query("SELECT distinct(cust_name) from job_orders");
							while ($row = $customer->fetch_object()) { ?>
							<option value="<?php echo $row->cust_name ?>" style="text-transform:capitalize"><?php echo $row->cust_name; ?></option>
								<?php } ?>
					</select>
		</div>
		<div class="new_cust">
				<label>New Customer:</label>
					<input type="text" name="new_cust" class="form-control">
		</div>
		<div class="company">
			<label>Company Name</label>
			<input type="text" name="company" class="form-control">
		</div>
		<div class="form-group">
			<label>Customer Address:</label>
			<input type="text" name="caddress" class="form-control" style="text-transform:capitalize" placeholder="" required>
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="description" class="form-control" style="text-transform:capitalize">
		</div>
		<button class="btn btn-primary" name="create" type="submit">Create</button>
		<button class="btn btn-default pull-right" type="reset">Clear</button>
	</div>
	<div class="col-md-8" style="border:1px solid black">
		<div class="form-group" id="addr0">
				<tr>
					<td>
					<span>Product name</span>
						<select class="" name="pname[]" style="width:300px">
							<option>...</option>
							<?php 					
							$products = $con->query("SELECT * from products");
							while ($row = $products->fetch_array()) { ?>
									<option value="<?php echo $row['prod_name']; ?>"  style="text-transform:capitalize">
								<?php echo $row['prod_name']; ?></option>
							<?php } ?>
						</select>
					</td>
						<td><span>Quantity</span>
							<input type="text" name="qty[]" class="" style="width:100px">
						</td>					
				</tr>
			</div>
			<div class="form-group " id="addr1"></div>
			<div class="form-group " id="addr2"></div>
			<div class="form-group " id="addr3"></div>
			<div class="form-group " id="addr4"></div>
			<div class="form-group " id="addr5"></div>
			<div class="form-group " id="addr6"></div>
			<div class="form-group" id="addr7"></div>
			<div class="form-group " id="addr8"></div>
			<div class="form-group " id="addr9"></div>

			<div class="form-group">
				<a id="addrow" class="btn btn-danger btn-xs">Add Row</a> | <a id="delrow" class="btn btn-info btn-xs">Delete Row</a>
			</div>
	</div>
	<div class="col-md-4" style="border:1px solid black">
		<div class="form-group">
				<tr>
					<td><span>Select Transactin Type</span>
						<select class="form-control" name="jtype" style="width:100px">
									<option>...</option>
								<?php $jo_type = $con->query("SELECT * from jo_type");
								while ($row = $jo_type->fetch_array()) { ?>
									<option value="<?php echo $row['jname'] ?>" style="text-transform:capitalize"><?php echo $row['jname']; ?></option>
								<?php } ?>
								</select>
					</td>
					<td><span>Total Price:</span>
						<input type="text" name="amount" class="form-control" style="width:300px">
					</td>
				</tr>
			</div>
			<div class="form-group">
				<label>Terms of Payment</label>
				<input type="text" name="term">
				<br>
				<label>Tin#</label>
				<input type="text" name="tin">
				<br>
				<label>P.O#</label>
				<input type="text" name="po">
			</div>

	</div>
	<div class="form-group">
	</div>
</form>
	</div>
</div>
<script type="text/javascript" src="js/create_jo.js"></script>
<?php include 'includes/footer.php' ?>
</body>
</html>