<?php
include '../connection/db.php';
$nquery = $con->query("SELECT * from products");
//if (isset($_POST['submit'])) {
//	$search = $_POST['search'];
//	$query = $con->query("SELECT * from products where prod_name LIKE '%$search%'");
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Supplier</title>
	<?php include 'includes/head.php';
	?>
</head>
<body>
<?php
include 'includes/nav.php';
include 'includes/acordian.php';
?>

<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">SUPPLIER Table</div>
		<div class="panel-body">
		<form action="" method="post"> 
			<!--<div class="input-group col-md-4 pull-right" style="margin:5px;">
				<input type="search" name="search" class="form-control" placeholder="Enter Supplier Name...">
				<div class="input-group-btn">
					<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>-->
		</form>
		<hr>
		<div class="col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">Enter New Supplies</div>
				<div class="panel-body" id="form">
					<form action="add-supply.php" method="post">
						<div class="form-group">
							<input type="text" name="sname" style="width:400px;" class="form-control" placeholder="Enter Supplier Name">
						</div>
						<div class="form-group">
							<input type="text" style="width:200px" name="dr" class="form-control" placeholder="Enter Deliver Number">
						</div>
						<div class="form-group" id="addr0">
							<tr>
								<td><input type="text" name="pname[]" class="" style="width:300px;" placeholder="Product Name">
								</td>
								<td> <input style="width:100px;" type="text" name="qty[]" class="" placeholder="Quantity"></td>
							</tr>
						</div>
						<div class="form-group" id="addr1"></div>
						<div class="form-group" id="addr2"></div>
						<div class="form-group" id="addr3"></div>
						<div class="form-group" id="addr4"></div>
						<div class="form-group" id="addr5"></div>
						<div class="form-group" id="addr6"></div>
						<div class="form-group" id="addr7"></div>
						<div class="form-group" id="addr8"></div>
						<div class="form-group" id="addr9"></div>
						<div class="form-group" id="addr10"></div>
						<div class="form-group">
							<a class="btn btn-danger btn-xs" id="addrow"><i class="fa fa-plus-circle"></i> Add Another Product</a> | <a class="btn btn-default btn-xs" id="delrow">Delete Added Row</a>
						</div>
						
						<div class="form-group">
							<input style="width:150px;" type="text" name="tprice" value="" class="form-control" placeholder="Total Price">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" id="submit" type="submit" name="submit"><i class="fa fa-plus-circle"></i> Submit</button>
							<button class="btn btn-default pull-right" type="reset"><i class="fa fa-ircle-left"></i> Clear</button>
						</div>
					</form>	
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading"></div>
				<div class="panel-body">
					
					 <Table class="table table-bordered">
					 	<tr>
					 		<th width="20/%">id</th>
					 		<th>Supplier</th>
					 		<th width="30%">Action</th>
					 	</tr>
					 	<tr>
					 	<?php //foreach ($rows as $r) {?>
					 		<?php 
							//if (isset($_POST['search'])) {
								//$search = $_POST['search'];

								$query = $con->query("SELECT id, supplier from products");
								//if ($query) {
									while ($row = $query->fetch_array()) {
										//$rows[] =$row;

										echo "<td> ".$row['id']."</td>
											<td style='text-transform:capitalize'>".$row['supplier']."</td>
											<td><a type='button' class='btn btn-xs btn-success' id='view'>VIEW</a></td>";
											?>
											</tr>
										<?php
										}
									//}else{
									//echo 'no data found';
								//}
					 		
					 	 //} ?>
					 </Table>
				</div>
			</div>
		</div>	
		</div>
	</div>
</div>
<?php include 'modal/supplier-modal.php'; ?>
<?php include 'includes/acordianjs.php'; ?>
<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="js/supplier.js"></script>
</body>
</html>