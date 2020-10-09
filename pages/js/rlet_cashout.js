$(document).ready(function(){
	$('#rlet_cashout').DataTable();
	$(document).on('click', '.edit', function(){

		var id = $(this).attr('id');
		var rx= $('#'+id).children('td[data-target=rx]').text();
		var name = $('#'+id).children('td[data-target=name]').text();
		var details = $('#'+id).children('td[data-target=details]').text();
		var amt= $('#'+id).children('td[data-target=amount]').text();
		

		$('#rlet-id').val(id);
		$('#rx').val(rx);
		$('#rname').val(name);
		$('#details').val(details);
		$('#ramt').val(amt);
		$('#edit_modal').modal('show');
	});
	$('.delete').on('click',function(){
		var id = $(this).attr('id');
		//alert(id);
		if (confirm('Are You Sure You Want To Delete This?!')) {
			$.ajax({
				url: 'delete_rletco.php',
					method: 'POST',
					data: {id:id},
					cache:false,
					success:function(data){
						alert("Successfully Deleted!");
						window.location.reload();
				}
			});
		}
	});
});