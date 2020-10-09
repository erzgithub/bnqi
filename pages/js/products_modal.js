$(document).ready(function(){
	$(document).on('click', '.edit_prod', function(){
		var id = $(this).data('id');
		var id = $('#'+id).children('td[data-target=prodId]').text();
		var name = $('#'+id).children('td[data-target=name]').text();
		var description = $('#'+id).children('td[data-target=description]').text();
		var ptype = $('#'+id).children('td[data-target=ptype]').text();
		var qty = $('#'+id).children('td[data-target=qty]').text();

		$('#prodId').val(id);
		$('#name').val(name);
		$('#description').val(description);
		$('#ptype').val(ptype);
		$('#qty').val(qty);
		$('#edit_modal').modal('show');
	});
	//$('#products').dataTable();
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
				url  : 'delete_prod.php',
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