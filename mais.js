$(document).ready( function() {
	$(".validar-edad-btn").click( function() {
		var formulario = $(".form-edad").serializeArray();
		$.ajax({
		  type: "POST",
		  dataType: 'json',
		  url:  "./controller.php?action=validarEdad",
		  data: formulario
		}).done( function( respuesta, textStatus, jqXHR ) {
			/*console.log(respuesta.responseText);
			if ( console && console.log ) {
         		console.log( respuesta );
     		}*/
		}).fail( function( jqXHR, textStatus , errorThrown ) {
		  	//console.log( jqXHR.statusText );
		}).always( function(res){
			console.log(res.responseText);
			window.location();//armas el sitio para que se rediercccione segun la respuesta del servidor
		});
	});
});
