<?php include 'includes/nav.php'; ?>
<?php include 'includes/head.php'; ?>

<div class="panel panel-danger col-md-6">
	<div class="panel-heading">Add Cash Out</div>
		<div class="panel-body">
			<div class="container-fluid">
					<form action="addco.php" method="post">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Reason:</span>
								<input type="text" name="reason" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Name:</span>
								<input type="text" name="name" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Details:</span>
								<input type="text" name="details" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" name="amt" style="width:160px; text-transform:capitalize;" class="form-control" required/>
							</div>
							
				<div class="">
					<div class="form-group">
						<button class="btn btn-success add_prod" name="add" id="add" type="submits">Add</button>
						<button class="btn btn-default pull-right" name="add" id="add" type="reset">clear</button>
					</div>
				</div>
					</form>
					<a href="cashout.php" class="btn btn-primary">Back to Cash Out</a>
				</div>
		</div>
	</div>
</div>