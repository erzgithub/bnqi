<form action="add_jo.php" method="post" id="form">
	<table class="table table-striped-bordered">
		<thead>
			<tr>
				<th style="width:20%;"></th>
				<th></th>
				<th></th>
				<th style="width:20%;"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td></td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>Quantity</th>
				<th>Product Name</th>
				<th>Description</th>
				<th>Transaction Type</th>
			</tr>
		</thead>
		<tbody>
			<tr id="addr0">
				<td>
					<div class="">

							<div class="form-group">
								<input type="text" name="qty" class="form-control" style="text-transform:capitalize">
							</div>
					</div>
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
			</tr>
			<tr id="addr1"></tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>Created by:</td>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table>
</form>
<form method="post" action="add_jo.php">
<div class="col-md-4">
	<div class="panel panel-warning">
		<div class="panel-heading"></div>
		<div class="panel-body">
			
				
			
			</form>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading"></div>
		<div class="panel-body">
			
			
			
			
		</div>
	</div>
</div>
</form>
<!--<?php foreach ($rows as $r) { ?>
						<td><?php echo $r['id']; ?></td>
						<td><?php echo $r['name']; ?></td>
						<td></td>
						<td><?php echo $r['rate']; ?></td>
						<td><?php echo $r['salary']; ?></td>
						<td><?php echo $r['ot']; ?></td>
						<td></td>
						<td></td>
						<td><button class="btn btn-danger btn-xs" id="<?php echo $r['id']; ?>" data-toggle="modal" data-target="#salary">Compute</button></td>-->

						if (isset($_POST['search'])) {
								$search = $_POST['search'];
								$query = $con->query("SELECT * from employee where name LIKE '%$search%'");
							
							while ($row = $query->fetch_array()) {
								//$rows = $row;
								echo '<td>'.$row['id'].'</td>';
								echo '<td>'.$row['name'].'</td>';
								echo '<td>'.$row['rate'].'</td>';
								echo '<td><input type="text" name="dow"></td>';
								echo '<td><input type="text" name="ot"></td>';
								echo '<td><input type="text" name="deduction"></td>';
								echo '<td><button class="btn btn-danger btn-xs" id='.$row['id'].' data-toggle="modal" data-target="#salary">Compute</button></td></tr>';

							}
						 ?>
<?php if (isset($_POST['search'])) {
							$search = $_POST['search'];

							$query = $con->query("SELECT * from cico where DATE_FORMAT(date_collected,'%M') LIKE '%$search%' and cashtype = 1 ");
							
							while ($r = $query->fetch_array()) {?>
							<td><?php echo $r['acct'];?></td>
							<td><?php echo $r['name'];?></td>
							<td><?php echo $r['estab']; ?></td>
							<td><?php echo $r['amount']; ?></td>
							<td><?php echo $r['cby']; ?></td>
							<td><?php echo date('M d, Y h:i A' ,strtotime($r['date_collected'])) ;?></td>
						</tr>
							<?php }
						}else{ 
							$query = $con->query("SELECT * from cico where cashtype = 1 ");
							while ($row = $query->fetch_array()) {
								echo "<td>".$row['acct']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['estab']."</td>";
								echo "<td>".$row['amount']."</td>";
								echo "<td>".$row['cby']."</td>";
								echo "<td>".date('M d, Y h:i A' ,strtotime($row['date_collected']))."</td>";
								echo "</tr>";
							} ?>

<?php
include '../connection/db.php';
/*$query = $con->query("SELECT a.id,a.name,a.rate,b.salary, sum(a.rate + b.salary) as ot from employee a left join salary b on a.id=b.emp_id");
while ($row = $query->fetch_array()) {
	$rows[] = $row;
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Salary</title>
	<?php include 'includes/head.php'; ?>
	<!--<script type="text/javascript" src="../datatables/media/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="../datatables/media/js/dataTables.bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../datatables/media/css/dataTables.bootstrap.min.css">-->
</head>
<body>
<?php include 'includes/nav.php'; ?>
<!--<?php include 'includes/acordian.php'; ?>-->
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-heading">Employee Table</div>
		<div class="panel-body">
		<!--<form action="" method="post">
			<div class="input-group col-md-4">
				<input type="search" name="search" class="form-control">
				<div class="input-group-btn">
					<button class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</div>
		</form>-->
		<a class = "btn btn-success btn-print hidden-print" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
		<hr>
		
			<table class="table table-striped-bordered table-bordered" id="salary">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Rate</th>
						<th>D.O.W.</th>
						<th>OT</th>
						<th>Advance</th>
						<th>Deductions</th>
						<th>Net Salary</th>
						<th class="">Action</th>
					</tr>
				</thead>
				<tbody>
				
					<?php $query = $con->query("SELECT * from employee left join salary on employee.id = salary.emp_id;"); 
						while ($row = $query->fetch_array()) {
						?>
					<tr id="<?php echo $row['id']; ?>">
						
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['rate']; ?></td>
						<td><?php echo $row['dow'];?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td><button class="btn btn-danger btn-xs compute" data-toggle="modal" data-target="#salary"><i class="fa fa-plus-cirlce	"></i> Compute</button></td>
					</tr>
					<?php } ?>
				
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript" src="js/salary.js"></script>
<?php include 'modal/salary-modal.php'; ?>
<?php include 'includes/footer.php'; ?>
</body>
</html>
<?php
include '../connection/db.php';
$salary = "";
$total_ot = "";
if (isset($_POST['dow'])) {
	$dow = $_POST['dow'];
	$ot = $_POST['ot'];
	$ded = $_POST['ded'];
	$rate = 500;

	$total_ot = $rate / 8 * $ot + 0.30;
	$salary = $dow * $rate;
	/*if (isset($_POST['ot'])) {
		$salary = $total_ot = $rate / 8 * $ot + 0.30;
	}*/


}else {
	echo "dow is not set";
}
?>
<form action="" method="post">
	<br>
	<td><input style="width:100px" type="number" name="dow"></td>							
	<td><input style="width:100px" type="number" name="ot"></td>
	<td><input style="width:100px" type="number" name="ded"></td>
	<td><span><?php echo $salary; ?></span></td>
	<input type="submit" name="submit">
</form>
<?php
if ($salary) {
	echo "salary = ";
	echo $salary."<br>";

	if ($total_ot) {
		$net=$salary + $total_ot."<br>";
		echo "Salay and OT = ";
		echo $net;
	}
	if ($salary) {

		$ded=$salary + $total_ot - $ded."<br>";
		echo "salary and OT - ded = ";
		echo $ded;
	}

	if (isset($_POST['ot'])) {
		echo "$total_ot = $rate / 8 * $ot + 0.30<br>";
		echo $ot + $total_ot;
	}
} ?>