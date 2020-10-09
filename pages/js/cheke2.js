$(document).ready(function(){
	$('#cheke').DataTable();
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
	$(function(){
		$('.delete_prod').click(function(){
			//var sample = $(this).parent();
			var prod_id = $(this).attr('id');
			//var prod_id = 'id=' + id;
			//alert(id);
			if (confirm("Are You Sure You Want To Delete This?")) {
			$.ajax({
				type : 'POST',
				url  : 'delete_chek.php',
				data : {prod_id:prod_id},
				cache: false,
				success:function(data){
					window.location.reload();
				}
			});
			}
			return false;
		});
	});
});