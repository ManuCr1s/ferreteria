$(document).ready(function(){
	$("#producto-search").keyup(filtrar);
})

function filtrar(e)
{
	var datos=$(this).val();

	$.ajax({
		url: '/ferreteria/app/scripts/search.php',
		type: 'POST',
		data: {"producto": datos},
	})
	.done(function(resp) {
		$("#productos").html(resp);
	});
}