<?php
include '../connection/db.php';

	if (isset($_POST['update'])) {
		$id = $_POST['edit-id'];
		$name = $_POST['ename'];
		$desc = $_POST['edesc'];
		$ptype = $_POST['eptype'];
		$qty = $_POST['eqty'];
		
		//echo $id;
		$query = $con->query("SELECT * from products where id='$id'");
		$count = $query->num_rows;
		if ($count > 0) {
			echo "TRUE";
			$update = $con->query("UPDATE products Set prod_name='$name', description='$desc', prod_type='$ptype', quantity='$qty' where id='$id'");
			echo "<script type='text/javascript'>alert('Product Updated');</script>";
			echo "<script type='text/javascript'>document.location='products.php'</script>";
			}else{
			echo "<script type='text/javascript'>alert('Something went wrong updating!');</script>";
			}
		}  else {
		echo "Something is Wrong with the data from ajax!";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Update</title>
	<?php include 'includes/head.php'; ?>
</head>
<body>
<div class="container">
	<div class="panel panel-warning">
		<div class="panel-heading">Welcome</div>
		<div class="panel-body">
		<?php if (isset($name)) {
			echo "<h2>".$name."</h2></br>";
			echo "<h2>".$desc."</h2></br>";
			echo "<h2>".$ptype."</h2></br>";
			echo "<h2>".$qty."</h2>";
		} ?>
		</div>
	</div>
</div>
</body>
</html>