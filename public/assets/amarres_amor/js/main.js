/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$( document ).ready(function() {    
    
    $( ".read-prod" ).click(function() {
        var item = $(this).data("item");
        if ($('.description_'+item).is(':hidden')) {
            $('.description_'+item).show();
        }else{
            $('.description_'+item).hide();
        }      
    });
});

