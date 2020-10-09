$(document).ready(function(){
	$('.new_cust').hide();

	$('.show_new').click(function(){
		$('.new_cust').toggle(1000);
		$('.old_cust').toggle(1000);
	});
		var i = 1;
		$('#addrow').click(function(){

			$('#addr'+i).html("<tr><td><input type='text' style='width:300px;' name='pname[]' placeholder='Product Name'></td><td> <input type='text' name='qty[]' style='' class='' placeholder='Quantity'></td></tr>");
			$('#tab').append('<div class="form-group" id="addr'+(i+1)+'"></div>');
			i++;
	});
	$('#delrow').on('click', function(){
		if (i>1) {
			$('#addr'+(i-1)).html('');
			i--;
		}
	});

});