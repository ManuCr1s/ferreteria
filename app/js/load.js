jQuery(document).ready(function() {
	$.ajax({
		url: '/ferreteria/app/scripts/load_data.php',
		type: 'POST'
		
	})
	.done(function(resp) {
		$("#productos").html(resp);
	})
	
	
});