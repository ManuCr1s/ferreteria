$(document).ready(function(){
    $.ajax({
        url:'/ferreteria/app/scripts/users.php',
        type:'POST'
    })
    .done(function(resp3) {
		$("#usuariio").html(resp3);
	})
	
});