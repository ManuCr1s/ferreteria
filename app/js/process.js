$(document).ready(function(){
	$("#form_login").submit(login);
});

function login(e)
{
	e.preventDefault();
	$.ajax({
		url: '/ferreteria/app/scripts/process.php',
		type: 'POST',
		data: $(this).serializeArray()
	})
	.done(function(resp) {

		if(resp==0)
		{
			alert("acceso denegado");
		}
		else
		{
			alert("BIENVENIDO");
			if(resp=="1")
			{
				window.location="/ferreteria/app/administrador.php";
			}else{
				window.location="/ferreteria/app/usuario.php";
			}
		}
	})
	
}