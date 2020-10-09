$(document).ready(function(){
	$('#cashin').dataTable();
	$(document).on('click', '.edit', function(){

		var id = $(this).attr('id');
		var acct= $('#'+id).children('td[data-target=acct]').text();
		var name = $('#'+id).children('td[data-target=name]').text();
		var estab = $('#'+id).children('td[data-target=estab]').text();
		var amt= $('#'+id).children('td[data-target=amount]').text();
		var cby = $('#'+id).children('td[data-target=cby]').text();
		

		$('#edit-id').val(id);
		$('#act').val(acct);
		$('#name').val(name);
		$('#estab').val(estab);
		$('#amt').val(amt);
		$('#cby').val(cby);
		$('#edit_modal').modal('show');
	});
	$('.delete').on('click',function(){
		var id = $(this).attr('id');
		//alert(id);
		if (confirm('Are You Sure You Want To Delete This?!')) {
			$.ajax({
				url: 'delete_rletci.php',
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