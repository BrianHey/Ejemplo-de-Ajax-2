$(document).ready(function(){

		$('input').keypress(function(){

				$.post("enviar.php",function(datos){
						$("#resultado").html(datos);
				});

		});


});