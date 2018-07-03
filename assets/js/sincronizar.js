$(document).ready(function(){

	function consignar(id){
		return $.ajax({
	    // En data puedes utilizar un objeto JSON, un array o un query string
	    data:{
	    "id": id
	    },
	    //Cambiar a type: POST si necesario
	    type: "POST",
	    // Formato de datos que se espera en la respuesta
	
	    // URL a la que se enviará la solicitud Ajax
	    url: "http://poli.catarco.com/includes/sincronizar.php",
		}); 
}


function botonSincronizar(){

	var ids = $('button#sincronizar');
	 
	for (var i = 0; i < ids.length; i++) {
		
		$(ids[i]).on('click', function(e){

			//Prevenimos el funcionamiento normal
			e.preventDefault();  

				var element = $(this);

				//Done es ejecutado cuando se recibe la respuesta del servidor. Response es el objeto JSON recibido. 
				consignar(element.data('id'))
				.done(function(response){

					if(response.success){

					element.parents('tr').animate({ backgroundColor: "#003" }, "slow")
	                                         .animate({ opacity: "hide" }, "slow");
	                                         
    				}else{
    					alert('Hola');
    				}

				})

				.fail(function(jqXHR, textStatus, errorThrown) {
	            
	        	});

				
			
		});
 	};
}
/*En este archivo JS hacemos uso de
JQ para realizar peticiones HTTP y eliminar las
notificaciones una vez hayan sido procesadas, 
usando AJAX
La función sincronizar es ejecuta al instante se carga el DOM*/
	
botonSincronizar();

});
