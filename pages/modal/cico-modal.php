
<div class="modal fade" id="addci">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Add Cash IN<button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button></div>
			<div class="modal-body">
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
					</div>
				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--edit cash in -->
<div class="modal fade" id="editci" tabindex="-1" role="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Add Cash IN<button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button></div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="editci.php" method="post">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Account:</span>
								<input type="text" id="act" name="eact" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Name:</span>
								<input type="text" id="name" name="ename" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Establishment:</span>
								<input type="text" id="estab" name="eestab" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Amount:</span>
								<input type="text" id="amt name="eamt" style="width:160px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Collected By:</span>
								<input type="text" id="cby" name="ecby" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<input type="hidden" name="edit-id" id="edit-id">

				<div class="">
					<div class="form-group">
						<button class="btn btn-success " name="edit" type="submit">Update</button>
					</div>
				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cashout -->
<div class="modal fade" id="addco" tabindex="-1" role="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Add Cash OUT<button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button></div>
			<div class="modal-body">
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
				</div>
			</div>
		</div>
	</div>
</div>
<!-- delete modal-->
<div class="modal fade in" id="del" role="dialog" tabindex="-1" aria-lablelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-cotent">
			<div class="modal-header">di nga halata</div>
			<div class="modal-body">
				juice ko po
			</div>
		</div>
	</div>
</div>