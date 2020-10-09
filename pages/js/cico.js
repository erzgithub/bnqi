$(document).ready(function(){
	$('#cashin').DataTable();
	$(document).on('click', '.edit_prod', function(){
		var id = $(this).data('id');
		var rx = $('#'+id).children('td[data-target=rx]').text();
		var agent = $('#'+id).children('td[data-target=agent]').text();
		var estab = $('#'+id).children('td[data-target=estab]').text();
		var bank = $('#'+id).children('td[data-target=bank]').text();
		var chekno = $('#'+id).children('td[data-target=chekno]').text();
		var price = $('#'+id).children('td[data-target=price]').text();
		var col = $('#'+id).children('td[data-target=col]').text();

		$('#edit-id').val(id);
		$('#rx').val(rx);
		$('#agent').val(agent);
		$('#estab').val(estab);
		$('#bank').val(bank);
		$('#chekno').val(chekno);
		$('#price').val(price);
		$('#col').val(col);
		$('#edit_modal').modal('show');
	});
	
	$('.delete').on('click',function(){
		var id = $(this).attr('id');
		//alert(id);
		if (confirm('Are You Sure You Want To Delete This?!')) {
			$.ajax({
				url: 'delete.php',
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