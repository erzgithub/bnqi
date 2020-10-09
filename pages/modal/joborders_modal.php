<!--Edit product Modal-->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Job Order Details</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="joborder_update.php">
				
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Customer Name:</span>
								<input type="text" id="cname" name="ename" style="width:387px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Address:</span>
								<input type="text" id="address" name="eaddress" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>

							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Description:</span>
								<input type="text" id="description" name="edesc" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Product Name:</span>
								<input type="text" id="pname" name="eptype" style="width:400px; text-transform:capitalize;" class="form-control" >
							</div>
						
							
							<!--<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" id="amount" name="eamount" style="width:100px; text-transform:capitalize;" class="form-control" required/>
							</div>-->
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Mobile:</span>
								<input type="text" id="mobile" name="emobile" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Contact:</span>
								<input type="text" id="contact" name="econtact" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>

							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Transaction Type:</span>
								<input type="text" id="jtype" name="ejtype" style="width:120px; text-transform:capitalize;" class="form-control" >
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Quantity:</span>
								<input type="text" id="qty" name="eqty" style="width:120px; text-transform:capitalize;" class="form-control" required/>
							</div>

							<div class="form-group input-group hidden">
								<input type="text" id="jobId" name="edit-id" class="form-control" style="width:50px;">
							</div>
							<div class="modal-footer">
								<button class="btn btn-success update_joborder pull-left" name="update" id="update">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>