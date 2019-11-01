$(document).ready(function(){
	$('.plus').on('click',function(){
 	if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min').css({'display':'inline-block'});
        $('.plus').css({'display':'none'});
    }

});
	$('.min').on('click',function(){
 	if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min').css({'display':'none'});
        $('.plus').css({'display':'inline-block'});
    }
    
});
    // click 2
    $('.plus-1').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-1').css({'display':'inline-block'});
        $('.plus-1').css({'display':'none'});
    }

});
    $('.min-1').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-1').css({'display':'none'});
        $('.plus-1').css({'display':'inline-block'});
    }
    
});
// click 3
    $('.plus-2').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-2').css({'display':'inline-block'});
        $('.plus-2').css({'display':'none'});
    }

});
    $('.min-2').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-2').css({'display':'none'});
        $('.plus-2').css({'display':'inline-block'});
    }
    
});
   // click 4
    $('.plus-3').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-3').css({'display':'inline-block'});
        $('.plus-3').css({'display':'none'});
    }

});
    $('.min-3').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-3').css({'display':'none'});
        $('.plus-3').css({'display':'inline-block'});
    }
    
});
// click 5
    $('.plus-4').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-4').css({'display':'inline-block'});
        $('.plus-4').css({'display':'none'});
    }

});
    $('.min-4').on('click',function(){
    if(!event.detail || event.detail==1){//activate on first click only to avoid hiding again on double clicks
        // Toggle classes and do functions here
        $('.min-4').css({'display':'none'});
        $('.plus-4').css({'display':'inline-block'});
    }
    
}); 
});