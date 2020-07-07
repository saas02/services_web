/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).ready(function() {    
    
    
    if($('.buttonNetwork').length > 0){
        
        $('.buttonNetwork').click(function(){            
            
            $.ajax({
                // En data puedes utilizar un objeto JSON, un array o un query string
                data: {},
                //Cambiar a type: POST si necesario
                type: "GET",
                // Formato de datos que se espera en la respuesta
                dataType: "json",
                // URL a la que se enviará la solicitud Ajax
                url: "networks/notify/"+$(this).data('network'),
            })
             .done(function( data, textStatus, jqXHR ) {
                 if ( console && console.log ) {
                     console.log( data );
                 }
             })
             .fail(function( jqXHR, textStatus, errorThrown ) {
                 if ( console && console.log ) {
                     console.log( "La solicitud a fallado: " +  textStatus);
                 }
            });
            
        });
    }else{
        console.log('No existe redes');
    }
    
});



