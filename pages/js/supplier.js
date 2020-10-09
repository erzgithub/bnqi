$(document).ready(function(){
	/*$('#submit').on('click', function(){
		if (confirm('Are you sure you want to add new supply?')) {
			$.ajax{

			}
		}
	});*/
	var i = 1;
		$('#addrow').on('click', function(){

			$('#addr'+i).html("<tr><td><input type='text' style='width:300px;' name='pname[]' placeholder='Product Name'></td><td> <input type='text' name='qty[]' style='width:100px;' class='' placeholder='Quantity'></td></tr>");
			$('#table').append('<div class="form-group" id="addr'+(i+1)+'"></div>');
			i++;
	});
	$('#delrow').on('click', function(){
		if (i>1) {
			$('#addr'+(i-1)).html('');
			i--;
		}
	});
});