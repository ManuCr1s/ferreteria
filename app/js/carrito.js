$(document).ready(function(){
	$("body").on("click",".product",comprar);	
	$("body").on("click",".delete",d);	
	
	
})

function comprar(e)
{
	e.preventDefault();

		var id=$(this).data("id");
		var cantidad=$('#cnt'+id).val();
		if(val(cantidad)==true){
			var precio=$(this).data("precio");
			var producto=$(this).data("producto");
			var total=precio*cantidad;
			
			$("#carrito_list").append('<tr class="ccc"><td>'+id+'</td><td>'+producto+'</td><td>'+precio+'</td><td class="hh" data-id="'+id+'">'+cantidad+'</td><td>'+total+'</td><td><a href="" class="delete">eliminar</a></td></tr>');
			alert('Realizo su compra');
		}else{
			alert('Ingrese Cantidad');
		}
	
}
function val(a){
	if(a.length==0){
		return false;
	}else{
		return true;
	}
}
function d(e)
{
	e.preventDefault();
	$(this).parent().parent().remove();
	
}


