<?php
include 'includes/head.php';
include 'includes/nav.php';
?>
<div class="panel panel-danger col-md-6">
	<div class="pane-heading"></div>
	<div class="panel-body">
		<div class="container-fluid">
					<form action="addchek.php" method="post">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Receipt:</span>
								<input type="text" name="resibo" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Agent:</span>
								<input type="text" name="agent" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Customer Establishment:</span>
								<input type="text" name="estab" style="width:340px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Bank:</span>
								<input type="text" name="bank" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Cheque#:</span>
								<input type="text" name="chek" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Price:</span>
								<input type="text" name="price" style="width:200px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Collector:</span>
								<input type="text" name="col" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>

				<div class="">
					<div class="form-group">
						<button class="btn btn-success" name="add" id="add" type="submit">Add</button>
						<button class="btn btn-default pull-right" name="add" id="add" type="reset">clear</button>
					</div>
				</div>
					</form>
					<a href="cheque.php" class="btn btn-primary">Back to Cheque Page</a>
			</div>
	</div>
</div>