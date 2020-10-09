$(document).ready(function(){
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
	/*$('#update').click(function(){
		var id  = $('#prodId').val();
		var name = $('#name').val();
		var description = $('#description').val();
		var ptype = $('#ptype').val();
		var qty = $('#qty').val();

		$.ajax({
			url    : 'products_update.php',
			type   : 'post',
			data   :{id:id, name:name, description:description, ptype:ptype, qty:qty},
			success:function(data){
				//console.log(response);
				alert(data);
			}
		});
	});
	//delete function
	$(function(){
		$('.delete_prod').click(function(){
			var element = $(this);
          	var prod_id = element.attr("id");
          	var info = 'id=' + prod_id;
			alert(info);
			//if (confirm('Are you sure you want to delete this?')) {
				$.ajax({
					type: 'post',
					url : 'delete_prod.php',
              		data:{prod_id:info},
              		success:function(data){
              			alert(data);
              		}
				});
				$(this).parent().parent().fadeOut(350,function(){
              		$(this).remove();
              	});
			//};
			return false;
		});
	});*/
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
	$('#cheke').DataTable();
});