<!--add customer modal-->
<div class="modal fade" id="add_cust" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header"><span class="pull-left"><h3>Add Customer</h3></span>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body" id="">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="cust_add.php">
				
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:110px;">Customer Name:</span>
								<input type="text" name="cname" style="width:387px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Address:</span>
								<input type="text" name="address" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Mobile #:</span>
								<input type="text" name="mobile" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Telephone #:</span>
								<input type="text" name="contact" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success add_cust pull-left" name="add" id="add">Add</button>
								<button type="button" class="btn btn-default pull-right" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>
<!--Edit product Modal-->
<div class="modal fade" id="edit_cust" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Update Customer Details</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="customer_update.php">
				
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Customer Name:</span>
								<input type="text" id="cname" name="ecname" style="width:387px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Address:</span>
								<input type="text" id="address" name="eaddress" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Mobile:</span>
								<input type="text" id="mobile" name="emobile" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Telephone:</span>
								<input type="text" id="tel" name="etel" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group hidden">
								<input type="text" id="cust_id" name="edit-id" class="form-control" style="width:50px;">
							</div>
							<div class="modal-footer">
								<button class="btn btn-success update_cust pull-left" name="update" id="update">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>