<?php 
include '../connection/db.php';
include 'includes/nav.php';
include 'includes/head.php'; 

if (isset($_GET['editid'])) {
	$id = $_GET['editid'];

	$query = $con->query("SELECT * from cico where id = $id");
	$row = $query->fetch_array();
}
if (isset($_POST['edit'])) {
    $act = $_POST['act'];
	$name = $_POST['name'];
	$estab = $_POST['estab'];
	$amt = $_POST['amt'];
	$cby = $_POST['cby'];

    $query = $con->query("UPDATE cico Set acct = '$act', name = '$name', estab = '$estab', amount = '$amt', cby = '$cby' where id = '$id'");
    echo "<script type='text/javascript'>alert('Success Updating!');</script>";
    echo "<script type='text/javascript'>document.location='cico.php';</script>";
}else{
    //echo 'Error Updating!';
}
?>
<div class="panel panel-danger col-md-6">
	<div class="panel-heading"><center><strong>Update Cash In</strong></center></div>
	<div class="panel-body">
		<div class="container-fluid">
		<form method="post" action="">
			<div class="form-group input-group">
								<span class="input-group-addon"  style="width:120px;">Account:</span>
								<input type="text" name="act" value="<?php echo $row['acct']; ?>" style="width:400px; text-transform:capitalize;" class="form-control" autofocus/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Name:</span>
								<input type="text" name="name" value="<?php echo $row['name']; ?>" style="width:400px; text-transform:capitalize;" class="form-control"/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Establishment:</span>
								<input type="text" name="estab" value="<?php echo $row['estab']; ?>" style="width:400px; text-transform:capitalize;" class="form-control"/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" name="amt" value="<?php echo $row['amount']; ?>" style="width:160px; text-transform:capitalize;" class="form-control" >
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Collected By:</span>
								<input type="text" name="cby" value = "<?php echo $row['cby']; ?>" style="width:400px; text-transform:capitalize;" class="form-control" />
							</div>

				<div class="">
					<div class="form-group">
						<button class="btn btn-success add_prod" name="edit" id="edit" type="submit">Update</button>
						<button class="btn btn-default pull-right" type="reset">clear</button>
					</div>
				</div>
					</form>
					<a href="cico.php" class="btn btn-primary">Back to Cash In</a>
				</div>
		</div>
		</div>
	</div>
</div>
