$(document).ready(function(){
	$(document).on('click', '.add', function(){
		var name = $('#jname').val();
		var address = $('#jaddress').val();
		var contact = $('#jcontact').val();
		var age = $('#jage').val();
		var gender = $('#jgender').val();
		var position = $('#jposition').val();
		var rate = $('#jrate').val();
	if (confirm("Are you sure you want to Add New Employee?")) {
		$.ajax({
			type: 'post',
			url: 'add_employee.php',
			data: {name:name,address:address,contact:contact,age:age,gender:gender,position:position,rate:rate},
			success:function(data){
				window.location.reload();
				//alert(name);
			}
		});
	}
	});
	$(document).on('click', '.edit', function(){
		var id = $(this).data('id');
		var eid = $('#'+id).children('td[data-target=empid]').text();
		var name = $('#'+id).children('td[data-target=empname]').text();
		var address = $('#'+id).children('td[data-target=address]').text();
		var contact = $('#'+id).children('td[data-target=contact]').text();
		var age = $('#'+id).children('td[data-target=age]').text();
		var gender = $('#'+id).children('td[data-target=gender]').text();
		var position = $('#'+id).children('td[data-target=position]').text();
		var rate = $('#'+id).children('td[data-target=rate]').text();
		var sample = $('#eid').val(eid);
		//console.log(sample);
		$('#emp_name').val(name);
		$('#emp_address').val(address);
		$('#empcontact').val(contact);
		$('#empage').val(age);
		$('#empgender').val(gender);
		$('#emp_position').val(position);
		$('#emprate').val(rate);
	});
		$(document).on('click', '.delete',function(){
			var id = $(this).data('id2');
			//alert(id);
			if (confirm("Are You Sure You Want To Delete This?")) {
				$.ajax({
					url: 'delete_emp.php',
					method: 'POST',
					data: {id:id},
					cache:false,
					success:function(data){
						alert("Employee Successfully Deleted!");
						window.location.reload();
					}
				});
			}
			return false;
		});
		
});
