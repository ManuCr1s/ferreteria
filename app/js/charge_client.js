jQuery(document).ready(function() {
	$.ajax({
		url: '/ferreteria/app/scripts/charge_client.php',
		type: 'POST',
		
	})
	.done(function(resp) {
		$("#productos").html(resp);
	})
	
	
});