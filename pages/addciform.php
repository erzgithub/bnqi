<?php include 'includes/nav.php'; ?>
<?php include 'includes/head.php' ?>
<div class="panel panel-danger col-md-6">
	<div class="panel-heading">Add Cash In</div>
	<div class="panel-body">
		<div class="container-fluid">
					<form action="addci.php" method="post">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Account:</span>
								<input type="text" name="act" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Name:</span>
								<input type="text" name="name" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Establishment:</span>
								<input type="text" name="estab" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" name="amt" style="width:160px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Collected By:</span>
								<input type="text" name="cby" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>

				<div class="">
					<div class="form-group">
						<button class="btn btn-success add_prod" name="add" id="add" type="submit">Add</button>
						<button class="btn btn-default pull-right" name="add" id="add" type="reset">clear</button>
					</div>
				</div>
					</form>
					<a href="cico.php" class="btn btn-primary">Back to Cash In</a>
				</div>
	</div>
</div>