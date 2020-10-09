<div class="modal fade" id="cheke2" tabindex="-1" role="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Add Cash IN<button type="button" class="close pull-right" data-dismiss="modal" aria-hidden="true">&times;</button></div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="addcheckrlet.php" method="post">
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
					</div>
				</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- edit cheke -->
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Cheque</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="chekedit2.php">
						<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Receipt:</span>
								<input type="text" id="rx" name="erx" style="width:400px; text-transform:capitalize;" class="form-control" autofocus required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Agent:</span>
								<input type="text" id="agent" name="eagent" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Customer Establishment:</span>
								<input type="text" id="estab" name="eestab" style="width:340px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Bank:</span>
								<input type="text" id="bank" name="ebank" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Cheque#:</span>
								<input type="text" id="chekno" name="echekno" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Price:</span>
								<input type="text" id="price" name="eprice" style="width:200px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Collector:</span>
								<input type="text" id="col" name="ecol" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<input type="hidden" id="edit-id" name="edit-id">

				<div class="">
					<div class="form-group">
						<button class="btn btn-success" name="edit" id="edit" type="submit">Add</button>
					</div>
				</div>	
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>