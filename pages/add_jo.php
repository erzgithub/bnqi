<?php
include '../connection/db.php';
$name = '';
$comp = '';
$addrs = '';
$prod = '';
$desc = '';
$qty = '';
$jtype = '';
$amount = '';
if (isset($_POST['cname']) && $_POST['cname'] != '') {
	$name = $_POST['cname'];
	$comp = $_POST['company'];
	$addrs = $_POST['caddress'];
	$prod = $_POST['pname'];
	$desc = $_POST['description'];
	$qty = $_POST['qty'];
	$amount = $_POST['amount'];
	$jtype = $_POST['jtype'];
	$term = $_POST['term'];
	$tin = $_POST['tin'];
	$po = $_POST['po'];
	
	foreach ($prod as $key => $value) {
		//echo $value;
		$query = $con->query("INSERT into job_orders(cust_name,company,address,description,pname,qty,jo_type,amount,term,tin,po,date_ginawa) 
			values('"
			.$con->escape_string($name).
			"','"
			.$con->escape_string($comp).
			"','"
			.$con->escape_string($addrs).
			"','"
			.$con->escape_string($desc).
			"','"
			.$con->escape_string($value).
			"','"
			.$con->escape_string($qty[$key]).
			"','"
			.$con->escape_string($jtype).
			"','"
			.$con->escape_string($amount).
			"','"
			.$con->escape_string($term).
			"','"
			.$con->escape_string($tin).
			"','"
			.$con->escape_string($po).
			"',now())");
		if ($jtype == 'Purchase') {
			foreach ($qty as $key => $value) {
				$newquery = $con->query("UPDATE products set quantity = quantity - '$value' where prod_name LIKE '%$prod[$key]%'");
				
			}
				echo "<script type='text/javascript'>alert('Success Creating Old Customer Job Order!');</script>";
			
				echo "<script type='text/javascript'>alert('Products Quantity Updated Successfully!');</script>";
			
			echo "<script type='text/javascript'>document.location='create_jo.php';</script>";
		}
	}

	//echo $jtype;
	/*'$name', '$addrs', '$desc', '$prod', '$qty', '$jtype','$amount', */
	
	//if ($jtype == 'Purchase') {
	//	$newquery = $con->query("UPDATE products set quantity = quantity - $qty where prod_name = '$prod'");	
		//echo "<script type='text/javascript'>alert('Products Quantity Updated Successfully!');</script>";
	//}
	//
	//echo "<script type='text/javascript'>document.location='create_jo.php';</script>";
}elseif (isset($_POST['new_cust'])) {
	$name = $_POST['new_cust'];
	$comp = $_POST['company'];
	$addrs = $_POST['caddress'];
	$prod = $_POST['pname'];
	$desc = $_POST['description'];
	$qty = $_POST['qty'];
	$jtype = $_POST['jtype'];
	$amount = $_POST['amount'];
	$term = $_POST['term'];
	$tin = $_POST['tin'];
	$po = $_POST['po'];

	foreach ($prod as $key => $value) {
		//echo $value;
		$query = $con->query("INSERT into job_orders(cust_name,company,address,description,pname,qty,jo_type,amount,term,tin,po,date_ginawa) 
			values('"
			.$con->escape_string($name).
			"','"
			.$con->escape_string($comp).
			"','"
			.$con->escape_string($addrs).
			"','"
			.$con->escape_string($desc).
			"','"
			.$con->escape_string($value).
			"','"
			.$con->escape_string($qty[$key]).
			"','"
			.$con->escape_string($jtype).
			"','"
			.$con->escape_string($amount).
			"','"
			.$con->escape_string($term).
			"','"
			.$con->escape_string($tin).
			"','"
			.$con->escape_string($po).
			"',now())");
		if ($jtype == 'Purchase') {
			foreach ($qty as $key => $value) {
				$newquery = $con->query("UPDATE products set quantity = quantity - '$value' where prod_name LIKE '%$prod[$key]%'");		
			}

			//$newquery = $con->query("UPDATE products set quantity = quantity - $qty where prod_name LIKE '%$prod%'");
			echo "<script type='text/javascript'>alert('Success Creating New Customer Job Order!');</script>";
			echo "<script type='text/javascript'>alert('Products Quantity Updated Successfully!');</script>";

			echo "<script type='text/javascript'>document.location='create_jo.php';</script>";
		}
	}

	//echo $addrs." ".$name." ".$prod." ".$desc." ".$qty." ".$jtype;
	/*$query = $con->query("INSERT into job_orders(cust_name,company,address,description,pname,qty,jo_type,amount,term,tin,po,date_ginawa) values('$name', '$addrs', '$desc', '$prod', '$qty', '$jtype','$amount', now())");*/
	
	//if ($jtype == 'Purchase') {
	//	$newquery = $con->query("UPDATE products set quantity = quantity - $qty where prod_name = '$prod'");
		//echo "<script type='text/javascript'>alert('Products Quantity Updated Successfully Based ON New Customers Order!');</script>";
	//}
	//echo "<script type='text/javascript'>alert('Success Creating New Customer Job Order!');</script>";
	//echo "<script type='text/javascript'>document.location='create_jo.php';</script>";
}	
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<div class="container" style="border:1px solid black">
	<div class="header">
		<center style="font-style:arial helvetica;">
			<label><h3>BNQI Enterprises</h3></label><br>
			<label><h4>Address: 1677A-1679 M. Hizon Street Corner E. Remigio Street Sta. Cruz Manila</h4></label><br>
			<label><h4>Tel#:733-0987 / 516-7114 / 522-9006 / 522-9011 (FAX)</h4></label>
		</center>
	</div>
	<div>
		<a class = "btn btn-success btn-print hidden-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Print</a>   <a href="home.php" class="btn btn-primary btn-home hidden-print"><i class="fa fa-arrow-circle-left"></i>Back to Homepage</a>
	</div>
	<hr>
	<div class="row">
	
		<div class="col-md-8">
				<div class="">Customer Name: 
					<label style="text-transform:capitalize;"><?php echo $name; ?></label>
				</div>
			<div class="pull-right">
				<table>
					<tr>
						<td>Term: <label class="" style="text-transform:capitalize;"></label><input type="text" name="" value="<?php echo $term; ?>"> </td>
						<td>tin#: <label class="" style="text-transform:capitalize;"><input type="text" name="" value="<?php echo $tin; ?>"></label></td>
						<td>P.O. Box: <label class="" style="text-transform:capitalize;"></label><input type="text" name="" value="<?php echo $po; ?>"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-md-4">
			<div class="">
					<span class="" style="text-transform:capitalize;"><label>Address: </label><?php echo $addrs; ?></span>
			</div>
		</div>
	</div>
	<div class="table">
		<table class="table table-striped">
			<thead>
				<tr>
					<th style="width:200px">Quantity</th>
					<th style="width:200px">Product</th>
					<th style="width:200px">Description</th>
					<th style="width:200px">Type</th>
					<th style="width:200px">Amount</th>
				</tr>
			</thead>
			<tbody>
				
				<?php
				if (isset($_POST['create'])) {
					$prod = $_POST['pname'];
					$qty = $_POST['qty'];

					foreach ($qty as $key => $value) {
						echo "<tr><td>".$con->escape_string($value)."<br></td>";
						echo "<td>".$prod[$key]."</td><";
						echo "<td>".$desc."</td>
						<td>".$jtype."</td>
						<td></td>/tr>";
					}
				} ?>
				 
					
					
				
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Total Price : <?php echo $amount; ?></td>
				</tr>
			</tbody>
		</table>
		<div class="col-md-3">
			<span>Created By: <?php echo ucwords($_SESSION['sessionName']." ".$_SESSION['sessionLname']); ?></span>
		</div>
	</div>
</div>
</body>
</html>
