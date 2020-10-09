<?php
include '../connection/db.php';

if (isset($_POST['prod_id'])) {
	$id = $_POST['prod_id'];
	$id = $con->escape_string($_POST['prod_id']);

	$query = $con->query("DELETE from products where id = $id");
	if ($query) {
		echo "Product Successfuly Deleted!";
		//echo "<script type='text/javascript>document.location='products.php'</script>'";
	}else{
	echo "Error";
	}

}
?>