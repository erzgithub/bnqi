<div class="modal fade" id="salary">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">Salary Computation<button class="close" data-dismiss="modal" type="close">x</button></div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="compute.php" method="post">
						<div class="form-group">
							<input type="text" class="form-control" name="dow" id="dow" placeholder="Enter D.O.W.">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="ot" id="ot" placeholder="Enter # of OT">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="adv" id="adv" placeholder="Cash Advance">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="ded" id="ded" placeholder="Deduction">
						</div>
						<input type="hidden" name="edit" id="edit-id">
						<div class="form-group">
							<button class="btn btn-xs btn-warning" type="submit"  name="submit">Compute</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>