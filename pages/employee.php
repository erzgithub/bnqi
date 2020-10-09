<?php
include '../connection/db.php';
include 'includes/epagination.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Employee</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/nav.php'; ?>
<?php include 'includes/acordian.php'; ?>
<?php include 'includes/acordianjs.php'; ?>


<div class="col-md-4">
	<div class="panel panel-success">
		<div class="panel-heading">Add New Employee</div>
		<form>
		<div class="panel-body">
			
				<div class="">
					<label>Enter Full Name</label>
					<div class="form-group">
						<input type="text" name="name" id="jname" class="form-control" data-target="name" style="text-transform:capitalize;" required >
					</div>
				</div>
				<div class="">
					<label>Address</label>
					<div class="form-group">
						<input type="text" name="address" id="jaddress" class="form-control" style="text-transform:capitalize;">
					</div>
				</div>
				<table class="form-group">
					<tr>
						<td><label>Contact</label><input type="text" name="contact" id="jcontact" class="form-control" style="width:200px; text-transform:capitalize;" required></td>
						<td> &nbsp; </td>
						<td> <label>Age</label><input type="text" name="age" id="jage" class="form-control" style="width:100px; text-transform:capitalize;" required></td>
						<td>&nbsp;</td>
						<td><label>Gender</label><input type="text" name="gender" id="jgender" class="form-control" style="width::100px; text-transform:capitalize;" required></td>
					</tr>
				</table>
				<div class="">
					<label>Position</label>
					<div class="form-group">
						<input type="text" name="position" id="jposition" class="form-control" style="text-transform:capitalize;">
					</div>
				</div>
				<div class="">
					<label>Rate</label>
					<div class="form-group">
						<input type="text" name="rate" id="jrate" class="form-control" style="width:100px;" required >
					</div>
				</div>
		</div>
				<div class="panel-footer">
					<button type="submit" class="btn btn-success add">Submit</button>
					<button type="reset" class="btn btn-default pull-right">Clear</button>
				</div>
		</form>
	</div>
</div>
<div class="col-md-5">
	<div class="panel panel-info">
		<div class="panel-heading">Employee List</div>
		<div class="panel-body">
			<div class="table">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Position</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php //$query = $con->query("SELECT * from employee");
					while ($row = $nquery->fetch_array()) { ?>					 
						<tr id="<?php echo $row['id']; ?>">
						
							<td data-target="empid" style="text-transform:capitalize;"><?php echo $row['id']; ?></td>
							<td data-target="empname" style="text-transform:capitalize;"><?php echo $row['name']; ?></td>
							<td data-target="position" style="text-transform:capitalize;"><?php echo $row['position']; ?></td>
							<td data-target="address" class="hidden"><?php echo $row['address']; ?></td>
							<td data-target="contact" class="hidden"><?php echo $row['contact']; ?></td>
							<td data-target="age" class="hidden"><?php echo $row['age']; ?></td>
							<td data-target="gender" class="hidden"><?php echo $row['gender']; ?></td>
							<td data-target="rate" class="hidden"><?php echo $row['rate']; ?></td>
							<td><button class="btn btn-info btn-xs edit" data-id="<?php echo $row['id']; ?>" data-target="#edit_emp" data-toggle="modal">View</button> | <button class="btn btn-danger btn-xs delete" data-id2="<?php echo $row['id'];?>">Delete</button></td>
						</tr>
					<?php } ?>						
					</tbody>
				</table>
				<div class="pagination_controls"><?php echo $paginationCtrls; ?></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/employee.js"></script>
<?php include 'includes/footer.php'; ?>
<?php include 'modal/empmodal.php'; ?>
</body>
</html>