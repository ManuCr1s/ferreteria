$(document).ready(function(){
    $("#producto-search").keyup(filtrar);
    $("body").on("click",".productt",comprarr);	
	$("body").on("click",".delete",dd);	
    
})

function filtrar(e)
{
	var datos=$(this).val();

	$.ajax({
		url: '/ferreteria/app/scripts/search2.php',
		type: 'POST',
		data: {"producto": datos},
	})
	.done(function(resp) {
		$("#productos").html(resp);
    });
    

}

function comprarr(e)
{
	e.preventDefault();
	
		var id=$(this).data("id");
		var cantidad=$('#cnt'+id).val();
		if(vall(cantidad)==true){
			var precio=$(this).data("precio");
            var producto=$(this).data("producto");
			var total=precio*cantidad;
			$("#carrito_list").append('<tr class="ccc"><td>'+id+'</td><td>'+producto+'</td><td>'+precio+'</td><td id="'+id+'">'+cantidad+'</td><td>'+total+'</td><td><a href="" class="delete">eliminar</a></td></tr>');
			alert('Realizo su compra');
		}else{
			
			alert('Ingrese Cantidad');
		}
	
}
function vall(a){
	if(a.length==0){
		return false;
	}else{
		return true;
	}
}
function dd(e)
{
	e.preventDefault();
	$(this).parent().parent().remove();
	
}