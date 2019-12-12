$(document).ready(function(){
	$("#new-product").submit(guardar);
})

function guardar(e)
{
	e.preventDefault();
	$.ajax({
		url: '/ferreteria/app/scripts/save_data.php',
		type: 'POST',
		data: $(this).serializeArray()
	})
	.done(function(response) {
		$.ajax({
			url: '/ferreteria/app/scripts/load_data.php',
			type: 'POST'		
	
		})
		.done(function(resp) {
			$("tbody").html(resp);
			$("#producto").val("");
			$("#tamano").val("");
			$("#fardos").val("");
			$("#descripcion").val("");
			$("#fecha").val("");
			$("#costo").val("");
			$("#precio").val("");
		});
		
		alert(response);
		$("#exampleModal").modal('hide');
	})
	
	
}