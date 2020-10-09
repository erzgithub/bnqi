<?php
include '../connection/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>BNQI | Salary</title>
	<?php include 'includes/head.php'; ?>
	
</head>
<body>
<?php include 'includes/nav.php'; ?>
<div class="col-md-10">
	<div class="panel panel-danger">
		<div class="panel-heading"><center><strong>Emplyee Salary</strong></center></div>
		<div class="panel-body">
			<table class="table table-stripe table-bordered">
			<a class = "btn btn-success btn-print hidden-print" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
			<hr>
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
						<th class="hidden-print">Action</th>
					</tr>
				</thead>
				<tbody>
					
						<?php $query = $con->query("SELECT * from employee"); 
						while ($row = $query->fetch_array()) {
							$dow = $row['dow'];
							$c = 0;
							$deduct = $row['ded'] + $row['odv'];
							$rate = $row['rate'];
							$salary = $row['rate'] * $row['dow'];
							$ot = $row['ot'];
							$total_ot = 0;
							
							if ($ot > 0) {
								
								$a = $rate / 8;
								$b = $a * $ot;
								$c = $b * 0.30 + $b;
								//$d = $c + $a;
								//$total_ot = ($rate / 8 * $ot) * 0.30 + $ot;
							}
							
							if ($c) {
								$net_income = $salary +  $c - $deduct;
							}else{
								$net_income = $salary - $deduct;
							}
							


						?>
					<tr id="<?php echo $row['id']; ?>">
						
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['rate']; ?></td>
						<td data-target='dow'><?php echo $row['dow'];?></td>
						<td data-target='ot'><?php echo $row['ot']; ?></td>
						<td data-target='advance'><?php echo $row['odv']; ?></td>
						<td data-target='ded'><?php echo $row['ded']; ?></td>
						<td data-target='netsal'><?php echo $net_income; ?></td>
						<td class="hidden-print"><button class="btn btn-danger btn-xs compute" data-toggle="modal" data-target="#salary" id="<?php echo $row['id']; ?>"><i class="fa fa-plus-cirlce	"></i> Compute</button> <button class="btn btn-info btn-xs delete" id="<?php echo $row['id'];?>">clear</button></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>	
		</div>
	</div>
</div>
<?php include 'modal/salary-modal.php'; ?>
<?php include 'includes/footer.php'; ?>
<script type="text/javascript" src="js/salary.js"></script>
</body>
</html>