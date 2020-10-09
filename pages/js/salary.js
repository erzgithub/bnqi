$(document).ready(function(){
	//$('#table').dataTable();
	
	$(document).on('click','.compute', function(){
		var id = $(this).attr('id');
		var dow = $('#' + id).children('td[data-target=dow]').text();
		var ot = $('#' + id).children('td[data-target=ot]').text();
		var advance = $('#' + id).children('td[data-target=advance]').text();
		var ded = $('#' + id).children('td[data-target=ded]').text();

		$('#dow').val(dow);
		$('#ot').val(ot);
		$('#adv').val(advance);
		$('#ded').val(ded);
		$('#edit-id').val(id);
		$('#salary').modal('show');
	});
	$(function(){
		$('.delete').click(function(){
			//var sample = $(this).parent();
			var prod_id = $(this).attr('id');
			//var prod_id = 'id=' + id;
			//alert(prod_id);
			if (confirm("Are You Sure You Want To Delete This?")) {
			$.ajax({
				type : 'POST',
				url  : 'delete_salary.php',
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