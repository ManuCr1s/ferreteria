$(document).ready(function(){
	$("body").on("click",".remove",delet);	
	$("body").on("click",".edit",edit);	
	$("#edit-product").submit(save);
})
var id;
function delet(e)
{
	e.preventDefault();
	var producto=$(this).data("producto");
	$.ajax({
		url: '/ferreteria/app/scripts/delete_data.php',
		type: 'POST',
		data:{"p":producto}
		
	})
	.done(function(resp) {
		$.ajax({
			url: '/ferreteria/app/scripts/load_data.php',
			type: 'POST'		
	
		})
		.done(function(resp) {
			$("tbody").html(resp);
			
		
		});
		alert(resp);
	});
	
	
}

function edit(e)
{
	e.preventDefault();
	id=$(this).data("id");
	var producto=$(this).data("producto");
	var tamano=$(this).data("tamano");
	var fardos=$(this).data("fardos");
	var descripcion=$(this).data("descripcion");
	var fecha=$(this).data("fecha");
	var costo=$(this).data("costo");
	var precio=$(this).data("precio");
	$("#producto-edit").val(producto);
	$("#tamano-edit").val(tamano);
	$("#fardos-edit").val(fardos);
	$("#descripcion-edit").val(descripcion);
	$("#fecha-edit").val(fecha);
	$("#costo-edit").val(costo);
	$("#precio-edit").val(precio);

}
function save(e)
{
	e.preventDefault();
	$.ajax({
		url: '/ferreteria/app/scripts/edit_data.php?id='+id,
		type: 'POST',
		data: $(this).serializeArray()
	})
	.done(function(resp) {
		$.ajax({
			url: '/ferreteria/app/scripts/load_data.php',
			type: 'POST'		
	
		})
		.done(function(resp) {
			$("tbody").html(resp);
			
		
		});
		
		alert(resp);
		$("#editModal").modal('hide');
	});
	
}