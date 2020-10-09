<div class="modal fade" id="edit_emp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Employee Details</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid">		
					<div class="">
					<form action="emp_update.php" method="post">
					<label>Enter Full Name</label>
						<div class="form-group">
							<input type="text" name="name" id="emp_name" class="form-control" data-target="name" style="text-transform:capitalize;" required>
						</div>
					</div>
					<div class="">
						<label>Address</label>
						<div class="form-group">
							<input type="text" name="address" id="emp_address" class="form-control" style="text-transform:capitalize;">
						</div>
					</div>
					<table class="form-group">
						<tr>
							<td><label>Contact</label><input type="text" name="contact" id="empcontact" class="form-control" style="width:200px; text-transform:capitalize;"></td>
							<td> &nbsp; </td>
							<td> <label>Age</label><input type="text" name="age" id="empage" class="form-control" style="width:100px; text-transform:capitalize;"></td>
							<td>&nbsp;</td>
							<td><label>Gender</label><input type="text" name="gender" id="empgender" class="form-control" style="width::100px; text-transform:capitalize;"></td>
						</tr>
					</table>
					<div class="">
						<label>Position</label>
						<div class="form-group">
							<input type="text" name="position" id="emp_position" class="form-control" style="text-transform:capitalize;">
						</div>
					</div>
					<div class="">
						<label>Rate</label>
						<div class="form-group">
							<input type="text" name="rate" id="emprate" class="form-control" style="width:100px;" required>
						</div>
					</div>
					<div class="hidden">
						<input type="text" name="id" id="eid">
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