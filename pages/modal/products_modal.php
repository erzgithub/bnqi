<!--add data modal-->
<div class="modal fade" id="add_prod" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Product</h4>
			</div>
			<div class="modal-body" id="">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="product_add.php">
				
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Product Name:</span>
								<input type="text" name="name" style="width:400px; text-transform:capitalize;" class="form-control" autofocus />
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Description:</span>
								<input type="text" name="description" style="width:400px; text-transform:capitalize;" class="form-control" />
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Type:</span>
								<input type="text" name="ptype" style="width:400px; text-transform:capitalize;" class="form-control" />
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Quantity:</span>
								<input type="text" name="qty" style="width:90px; text-transform:capitalize;" class="form-control" />
							</div>
							<div class="form-group">
								<button class="btn btn-success add_prod" name="add" id="add">Add</button>
							</div>
						
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>
<!--Edit product Modal-->
<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Product Details</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form class="form-horizontal" method="post" action="products_update.php">
				
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Product Name:</span>
								<input type="text" id="name" name="ename" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
					
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Description:</span>
								<input type="text" id="description" name="edesc" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			
					
						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Type:</span>
								<input type="text" id="ptype" name="eptype" style="width:400px; text-transform:capitalize;" class="form-control" required/>
							</div>			

						
							<div class="form-group input-group">
								<span class="input-group-addon" style="width:120px;">Quantity:</span>
								<input type="text" id="qty" name="eqty" style="width:90px; text-transform:capitalize;" class="form-control" required/>
							</div>
							<div class="form-group input-group hidden">
								<input type="text" id="prodId" name="edit-id" class="form-control" style="width:50px;">
							</div>
							<div class="modal-footer">
								<button class="btn btn-success update_prod pull-left" name="update" id="update">Update</button>
								<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>