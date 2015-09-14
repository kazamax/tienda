$(document).ready(function() {
	$('#products').pinterest_grid({
		no_columns: 4,
		padding_x: 5,
		padding_y: 5,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});

	// Update item cart
	$(".btn-update-item").on('click', function(e){
		e.preventDefault();
		
		var id = $(this).data('id');
		var href = $(this).data('href');
		var quantity = $("#product_" + id).val();

		window.location.href = href + "/" + quantity;
	});

});
