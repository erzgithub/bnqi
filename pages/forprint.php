<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<div class="container">
	<div class="header">
		<center>
			<label><h3>BNQI Enterprises</h3></label><br>
			<label><h4>Address: 1677A-1679 M. Hizon Street Corner E. Remigio Street Sta. Cruz Manila</h4></label><br>
			<label><h4>Tel#:733-0987 / 516-7114 / 522-9006 / 522-9011 (FAX)</h4></label>
		</center>
	</div>
	<div>
		<a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>
	</div>
	<div class="table">
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width:200px">Customer</th>
					<th style="width:200px">Adress</th>
					<th style="width:200px">Description</th>
					<th style="width:200px">Quantity</th>
					<th style="width:200px">Type</th>
					<th style="width:200px">Price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
				</tr>
				<tr>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
					<td><?php //echo $name; ?></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Total Price : </td>
				</tr>
			</tbody>
		</table>
		<div class="col-md-3">
			<span>Created By:</span>
		</div>
	</div>
</div>
</body>
</html>