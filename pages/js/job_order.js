$(document).ready(function(){
	$(document).on('click', '.edit_jlist', function(){
		var id = $(this).data('id');
		var cname = $('#'+id).children('td[data-target=cust_name]').text();
		var address = $('#'+id).children('td[data-target=address]').text();
		var description = $('#'+id).children('td[data-target=description]').text();
		var jtype = $('#'+id).children('td[data-target=jtype]').text();
		var qty = $('#'+id).children('td[data-target=qty]').text();
		var pname = $('#'+id).children('td[data-target=pname]').text();
		//var amount = $('#'+id).children('td[data-target=amount]').text();
		var mobile = $('#'+id).children('td[data-target=mobile]').text();
		var contact = $('#'+id).children('td[data-target=contact]').text();

		$('#jobId').val(id);
		$('#cname').val(cname);
		$('#address').val(address);
		$('#description').val(description);
		$('#jtype').val(jtype);
		$('#qty').val(qty);
		$('#pname').val(pname);
		$('#mobile').val(mobile);
		$('#contact').val(contact);
		$('#edit_modal').modal('show');
	});
	$(function(){
		$('.delete_jlist').click(function(){
			var sample = $(this).parent();
			var jo_id = $(this).attr('id');
			//var prod_id = 'id=' + id;
			//alert(jo_id);
			if (confirm("Are You Sure You Want To Delete This?")) {
			$.ajax({
				type : 'POST',
				url  : 'delete_jo.php',
				data : {jo_id:jo_id},
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