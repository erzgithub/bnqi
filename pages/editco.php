<?php
include '../connection/db.php';
include 'includes/head.php';
include 'includes/nav.php';

if (isset($_GET['editid'])) {
	$id = $_GET['editid'];

	$query=$con->query("SELECT * from cico where id = $id");
	$row = $query->fetch_array();
}
if (isset($_POST['edit'])) {
    $reason = $_POST['reason'];
	$name = $_POST['name'];
	$det = $_POST['details'];
	$amt = $_POST['amt'];

    $query = $con->query("UPDATE cico Set reason = '$reason', name = '$name', details = '$det', amount = '$amt' where id = '$id'");
    echo "<script type='text/javascript'>alert('Success Updating!');</script>";
    echo "<script type='text/javascript'>document.location='cashout.php';</script>";
}else{
    //echo 'Error Updating!';
}
?>
<div class="panel panel-danger col-md-6">
	<div class="panel-heading"><center><strong>Edit Cash Out</strong></center></div>
	<div class="panel-body">
		<div class="container-fluid">
					<form action="" method="post">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Reason:</span>
								<input type="text" name="reason" value="<?php echo $row['reason']; ?>" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon"  style="width:120px;">Name:</span>
								<input type="text" name="name" value="<?php echo $row['name']; ?>" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Details:</span>
								<input type="text" name="details" value="<?php echo $row['details']; ?>" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" name="amt" value="<?php echo $row['amount']; ?>" style="width:160px; text-transform:capitalize;" class="form-control" required/>
							</div>
							
				<div class="">
					<div class="form-group">
						<button class="btn btn-success add_prod" name="edit" type="submit">Update</button>
						<button class="btn btn-default pull-right" name="add" id="add" type="reset">clear</button>
					</div>
				</div>
					</form>
					<a href="cashout.php" class="btn btn-primary">Back to Cash Out</a>
				</div>
	</div>
</div>