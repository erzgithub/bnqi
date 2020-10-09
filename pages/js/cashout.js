$(document).ready(function(){
	$('#cashout').DataTable();
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