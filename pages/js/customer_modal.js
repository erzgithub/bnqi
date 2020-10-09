$(document).ready(function(){
	$(document).on('click', '.edit_cust', function(){
		var id = $(this).data('id');
		var id = $('#'+id).children('td[data-target=cust_id]').text();
		var name = $('#'+id).children('td[data-target=cname]').text();
		var address = $('#'+id).children('td[data-target=address]').text();
		var mobile = $('#'+id).children('td[data-target=mobile]').text();
		var tel = $('#'+id).children('td[data-target=tel]').text();

		$('#cust_id').val(id);
		$('#cname').val(name);
		$('#address').val(address);
		$('#mobile').val(mobile);
		$('#tel').val(tel);
		$('#edit_cust').modal('show');
	});
	$(function(){
		$('.delete_cust').click(function(){;
			var id = $(this).attr('id');
			if (confirm("Are You Sure You Want To Delete This?")) {
			$.ajax({
				type : 'POST',
				url  : 'delete_cust.php',
				data : {id:id},
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
